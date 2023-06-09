<?php declare(strict_types=1);

namespace Shopware\Elasticsearch\Framework\Indexing\Event;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\Event\ShopwareEvent;
use Shopware\Core\Framework\Log\Package;
use Symfony\Contracts\EventDispatcher\Event;

#[Package('core')]
class ElasticsearchIndexerLanguageCriteriaEvent extends Event implements ShopwareEvent
{
    private Criteria $criteria;

    private Context $context;

    public function __construct(Criteria $criteria, Context $context)
    {
        $this->criteria = $criteria;
        $this->context = $context;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }
}
