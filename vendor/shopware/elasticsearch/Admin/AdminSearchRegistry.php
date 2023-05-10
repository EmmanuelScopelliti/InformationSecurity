<?php declare(strict_types=1);

namespace Shopware\Elasticsearch\Admin;

use Doctrine\DBAL\Connection;
use Elasticsearch\Client;
use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityWrittenContainerEvent;
use Shopware\Core\Framework\Event\ProgressAdvancedEvent;
use Shopware\Core\Framework\Event\ProgressFinishedEvent;
use Shopware\Core\Framework\Event\ProgressStartedEvent;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Elasticsearch\Admin\Indexer\AbstractAdminIndexer;
use Shopware\Elasticsearch\Exception\ElasticsearchIndexingException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * @internal
 *
 * @final
 */
#[Package('system-settings')]
class AdminSearchRegistry implements MessageHandlerInterface, EventSubscriberInterface
{
    /**
     * @var array<string, mixed>
     */
    private array $indexer;

    private Connection $connection;

    private MessageBusInterface $queue;

    private EventDispatcherInterface $dispatcher;

    private Client $client;

    private AdminElasticsearchHelper $adminEsHelper;

    /**
     * @var array<mixed>
     */
    private array $config;

    /**
     * @var array<mixed>
     */
    private array $mapping;

    /**
     * @param AbstractAdminIndexer[] $indexer
     * @param array<mixed> $config
     * @param array<mixed> $mapping
     */
    public function __construct(
        $indexer,
        Connection $connection,
        MessageBusInterface $queue,
        EventDispatcherInterface $dispatcher,
        Client $client,
        AdminElasticsearchHelper $adminEsHelper,
        array $config,
        array $mapping
    ) {
        $this->indexer = $indexer instanceof \Traversable ? iterator_to_array($indexer) : $indexer;
        $this->connection = $connection;
        $this->queue = $queue;
        $this->dispatcher = $dispatcher;
        $this->client = $client;
        $this->adminEsHelper = $adminEsHelper;
        $this->mapping = $mapping;

        if (isset($config['settings']['index'])) {
            if (\array_key_exists('number_of_shards', $config['settings']['index']) && $config['settings']['index']['number_of_shards'] === null) {
                unset($config['settings']['index']['number_of_shards']);
            }

            if (\array_key_exists('number_of_replicas', $config['settings']['index']) && $config['settings']['index']['number_of_replicas'] === null) {
                unset($config['settings']['index']['number_of_replicas']);
            }
        }

        $this->config = $config;
    }

    public function __invoke(AdminSearchIndexingMessage $message): void
    {
        $indexer = $this->getIndexer($message->getEntity());

        $documents = $indexer->fetch($message->getIds());

        $this->push($indexer, $message->getIndices(), $documents, $message->getIds());
    }

    public static function getSubscribedEvents(): array
    {
        return [
            EntityWrittenContainerEvent::class => [
                ['refresh', -1000],
            ],
        ];
    }

    /**
     * @return iterable<class-string>
     */
    public static function getHandledMessages(): iterable
    {
        return [
            AdminSearchIndexingMessage::class,
        ];
    }

    public function iterate(AdminIndexingBehavior $indexingBehavior): void
    {
        if ($this->adminEsHelper->getEnabled() === false) {
            return;
        }

        /** @var array<string> $entities */
        $entities = array_keys($this->indexer);

        if ($indexingBehavior->getOnlyEntities()) {
            $entities = array_intersect($entities, $indexingBehavior->getOnlyEntities());
        } elseif ($indexingBehavior->getSkipEntities()) {
            $entities = array_diff($entities, $indexingBehavior->getSkipEntities());
        }

        $indices = $this->createIndices($entities);

        foreach ($entities as $entityName) {
            $indexer = $this->getIndexer($entityName);
            $iterator = $indexer->getIterator();

            $this->dispatcher->dispatch(new ProgressStartedEvent($indexer->getName(), $iterator->fetchCount()));

            while ($ids = $iterator->fetch()) {
                // we provide no queue when the data is sent by the admin
                if ($indexingBehavior->getNoQueue() === true) {
                    $this->__invoke(new AdminSearchIndexingMessage($indexer->getEntity(), $indexer->getName(), $indices, $ids));
                } else {
                    $this->queue->dispatch(new AdminSearchIndexingMessage($indexer->getEntity(), $indexer->getName(), $indices, $ids));
                }

                $this->dispatcher->dispatch(new ProgressAdvancedEvent(\count($ids)));
            }

            $this->dispatcher->dispatch(new ProgressFinishedEvent($indexer->getName()));
        }

        $this->swapAlias($indices);
    }

    public function refresh(EntityWrittenContainerEvent $event): void
    {
        if ($this->adminEsHelper->getEnabled() === false || !$this->isIndexedEntityWritten($event)) {
            return;
        }

        if ($this->adminEsHelper->getRefreshIndices()) {
            $this->refreshIndices();
        }

        /** @var array<string, string> $indices */
        $indices = $this->connection->fetchAllKeyValue('SELECT `alias`, `index` FROM admin_elasticsearch_index_task');

        if (empty($indices)) {
            return;
        }

        foreach ($this->indexer as $indexer) {
            $ids = $event->getPrimaryKeys($indexer->getEntity());

            if (empty($ids)) {
                continue;
            }
            $documents = $indexer->fetch($ids);

            $this->push($indexer, $indices, $documents, $ids);
        }
    }

    /**
     * @return AbstractAdminIndexer[]
     */
    public function getIndexers(): iterable
    {
        return $this->indexer;
    }

    public function getIndexer(string $name): AbstractAdminIndexer
    {
        $indexer = $this->indexer[$name] ?? null;
        if ($indexer) {
            return $indexer;
        }

        throw new ElasticsearchIndexingException([\sprintf('Indexer for name %s not found', $name)]);
    }

    private function isIndexedEntityWritten(EntityWrittenContainerEvent $event): bool
    {
        foreach ($this->indexer as $indexer) {
            $ids = $event->getPrimaryKeys($indexer->getEntity());

            if (!empty($ids)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array<string, string> $indices
     * @param array<string, array<string|int, string>> $data
     * @param array<string> $ids
     */
    private function push(AbstractAdminIndexer $indexer, array $indices, array $data, array $ids): void
    {
        $alias = $this->adminEsHelper->getIndex($indexer->getName());

        if (!isset($indices[$alias])) {
            return;
        }

        $toRemove = array_filter($ids, static function (string $id) use ($data): bool {
            return !isset($data[$id]);
        });

        $documents = [];
        foreach ($data as $id => $document) {
            $documents[] = ['index' => ['_id' => $id]];

            $documents[] = \array_replace(
                ['entityName' => $indexer->getEntity(), 'parameters' => [], 'textBoosted' => '', 'text' => ''],
                $document
            );
        }

        foreach ($toRemove as $id) {
            $documents[] = ['delete' => ['_id' => $id]];
        }

        $arguments = [
            'index' => $indices[$alias],
            'body' => $documents,
        ];

        $result = $this->client->bulk($arguments);

        if (\is_array($result) && !empty($result['errors'])) {
            $errors = $this->parseErrors($result);

            throw new ElasticsearchIndexingException($errors);
        }
    }

    /**
     * @param array<string> $entities
     *
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<string, string>
     */
    private function createIndices(array $entities): array
    {
        $indexTasks = [];
        $indices = [];
        foreach ($entities as $entityName) {
            $indexer = $this->getIndexer($entityName);
            $alias = $this->adminEsHelper->getIndex($indexer->getName());
            $index = $alias . '_' . time();

            if ($this->indexExists($index)) {
                continue;
            }

            $indices[$alias] = $index;

            $this->create($indexer, $index, $alias);

            $iterator = $indexer->getIterator();
            $indexTasks[] = [
                'id' => Uuid::randomBytes(),
                '`entity`' => $indexer->getEntity(),
                '`index`' => $index,
                '`alias`' => $alias,
                '`doc_count`' => $iterator->fetchCount(),
            ];
        }

        $this->connection->executeStatement(
            'DELETE FROM admin_elasticsearch_index_task WHERE `entity` IN (:entities)',
            ['entities' => $entities],
            ['entities' => Connection::PARAM_STR_ARRAY]
        );

        foreach ($indexTasks as $task) {
            $this->connection->insert('admin_elasticsearch_index_task', $task);
        }

        return $indices;
    }

    private function refreshIndices(): void
    {
        $entities = [];
        $indexTasks = [];
        foreach ($this->indexer as $indexer) {
            $alias = $this->adminEsHelper->getIndex($indexer->getName());

            if ($this->aliasExists($alias)) {
                continue;
            }

            $index = $alias . '_' . time();
            $this->create($indexer, $index, $alias);

            $entities[] = $indexer->getEntity();

            $iterator = $indexer->getIterator();
            $indexTasks[] = [
                'id' => Uuid::randomBytes(),
                '`entity`' => $indexer->getEntity(),
                '`index`' => $index,
                '`alias`' => $alias,
                '`doc_count`' => $iterator->fetchCount(),
            ];
        }

        $this->connection->executeStatement(
            'DELETE FROM admin_elasticsearch_index_task WHERE `entity` IN (:entities)',
            ['entities' => $entities],
            ['entities' => Connection::PARAM_STR_ARRAY]
        );

        foreach ($indexTasks as $task) {
            $this->connection->insert('admin_elasticsearch_index_task', $task);
        }
    }

    private function create(AbstractAdminIndexer $indexer, string $index, string $alias): void
    {
        $mapping = $indexer->mapping([
            'properties' => [
                'id' => ['type' => 'keyword'],
                'textBoosted' => ['type' => 'text'],
                'text' => ['type' => 'text'],
                'entityName' => ['type' => 'keyword'],
                'parameters' => ['type' => 'keyword'],
            ],
        ]);

        $mapping = array_merge_recursive($mapping, $this->mapping);

        $body = array_merge(
            $this->config,
            ['mappings' => $mapping]
        );

        $this->client->indices()->create([
            'index' => $index,
            'body' => $body,
        ]);

        $this->createAliasIfNotExisting($index, $alias);
    }

    private function indexExists(string $name): bool
    {
        return $this->client->indices()->exists(['index' => $name]);
    }

    private function aliasExists(string $alias): bool
    {
        return $this->client->indices()->existsAlias(['name' => $alias]);
    }

    /**
     * @param array<string, array<array<string, mixed>>> $result
     *
     * @return array<array{reason: string}|string>
     */
    private function parseErrors(array $result): array
    {
        $errors = [];
        foreach ($result['items'] as $item) {
            $item = $item['index'] ?? $item['delete'];

            if (\in_array($item['status'], [200, 201], true)) {
                continue;
            }

            $errors[] = [
                'index' => $item['_index'],
                'id' => $item['_id'],
                'type' => $item['error']['type'] ?? $item['_type'],
                'reason' => $item['error']['reason'] ?? $item['result'],
            ];
        }

        return $errors;
    }

    private function createAliasIfNotExisting(string $index, string $alias): void
    {
        $exist = $this->client->indices()->existsAlias(['name' => $alias]);

        if ($exist) {
            return;
        }

        $this->putAlias($index, $alias);
    }

    /**
     * @param array<string, string> $indices
     */
    private function swapAlias($indices): void
    {
        foreach ($indices as $alias => $index) {
            $exist = $this->client->indices()->existsAlias(['name' => $alias]);

            if (!$exist) {
                $this->putAlias($index, $alias);

                return;
            }

            $current = $this->client->indices()->getAlias(['name' => $alias]);

            if (!isset($current[$index])) {
                $this->putAlias($index, $alias);
            }

            unset($current[$index]);
            $current = array_keys($current);

            foreach ($current as $value) {
                $this->client->indices()->delete(['index' => $value]);
            }
        }
    }

    private function putAlias(string $index, string $alias): void
    {
        $this->client->indices()->refresh([
            'index' => $index,
        ]);
        $this->client->indices()->putAlias(['index' => $index, 'name' => $alias]);
    }
}
