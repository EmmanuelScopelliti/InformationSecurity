<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Elasticsearch'.\DIRECTORY_SEPARATOR.'SslConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Elasticsearch'.\DIRECTORY_SEPARATOR.'ProductConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Elasticsearch'.\DIRECTORY_SEPARATOR.'AdministrationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ElasticsearchConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabled;
    private $indexingEnabled;
    private $indexingBatchSize;
    private $hosts;
    private $indexPrefix;
    private $throwException;
    private $loggerLevel;
    private $ssl;
    private $indexSettings;
    private $analysis;
    private $dynamicTemplates;
    private $product;
    private $administration;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function indexingEnabled($value): self
    {
        $this->_usedProperties['indexingEnabled'] = true;
        $this->indexingEnabled = $value;

        return $this;
    }

    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function indexingBatchSize($value): self
    {
        $this->_usedProperties['indexingBatchSize'] = true;
        $this->indexingBatchSize = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->_usedProperties['hosts'] = true;
        $this->hosts = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function indexPrefix($value): self
    {
        $this->_usedProperties['indexPrefix'] = true;
        $this->indexPrefix = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function throwException($value): self
    {
        $this->_usedProperties['throwException'] = true;
        $this->throwException = $value;

        return $this;
    }

    /**
     * @default 400
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loggerLevel($value): self
    {
        $this->_usedProperties['loggerLevel'] = true;
        $this->loggerLevel = $value;

        return $this;
    }

    public function ssl(array $value = []): \Symfony\Config\Elasticsearch\SslConfig
    {
        if (null === $this->ssl) {
            $this->_usedProperties['ssl'] = true;
            $this->ssl = new \Symfony\Config\Elasticsearch\SslConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "ssl()" has already been initialized. You cannot pass values the second time you call ssl().');
        }

        return $this->ssl;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function indexSettings($value): self
    {
        $this->_usedProperties['indexSettings'] = true;
        $this->indexSettings = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function analysis($value): self
    {
        $this->_usedProperties['analysis'] = true;
        $this->analysis = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function dynamicTemplates($value): self
    {
        $this->_usedProperties['dynamicTemplates'] = true;
        $this->dynamicTemplates = $value;

        return $this;
    }

    public function product(array $value = []): \Symfony\Config\Elasticsearch\ProductConfig
    {
        if (null === $this->product) {
            $this->_usedProperties['product'] = true;
            $this->product = new \Symfony\Config\Elasticsearch\ProductConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "product()" has already been initialized. You cannot pass values the second time you call product().');
        }

        return $this->product;
    }

    public function administration(array $value = []): \Symfony\Config\Elasticsearch\AdministrationConfig
    {
        if (null === $this->administration) {
            $this->_usedProperties['administration'] = true;
            $this->administration = new \Symfony\Config\Elasticsearch\AdministrationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "administration()" has already been initialized. You cannot pass values the second time you call administration().');
        }

        return $this->administration;
    }

    public function getExtensionAlias(): string
    {
        return 'elasticsearch';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('indexing_enabled', $value)) {
            $this->_usedProperties['indexingEnabled'] = true;
            $this->indexingEnabled = $value['indexing_enabled'];
            unset($value['indexing_enabled']);
        }

        if (array_key_exists('indexing_batch_size', $value)) {
            $this->_usedProperties['indexingBatchSize'] = true;
            $this->indexingBatchSize = $value['indexing_batch_size'];
            unset($value['indexing_batch_size']);
        }

        if (array_key_exists('hosts', $value)) {
            $this->_usedProperties['hosts'] = true;
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }

        if (array_key_exists('index_prefix', $value)) {
            $this->_usedProperties['indexPrefix'] = true;
            $this->indexPrefix = $value['index_prefix'];
            unset($value['index_prefix']);
        }

        if (array_key_exists('throw_exception', $value)) {
            $this->_usedProperties['throwException'] = true;
            $this->throwException = $value['throw_exception'];
            unset($value['throw_exception']);
        }

        if (array_key_exists('logger_level', $value)) {
            $this->_usedProperties['loggerLevel'] = true;
            $this->loggerLevel = $value['logger_level'];
            unset($value['logger_level']);
        }

        if (array_key_exists('ssl', $value)) {
            $this->_usedProperties['ssl'] = true;
            $this->ssl = new \Symfony\Config\Elasticsearch\SslConfig($value['ssl']);
            unset($value['ssl']);
        }

        if (array_key_exists('index_settings', $value)) {
            $this->_usedProperties['indexSettings'] = true;
            $this->indexSettings = $value['index_settings'];
            unset($value['index_settings']);
        }

        if (array_key_exists('analysis', $value)) {
            $this->_usedProperties['analysis'] = true;
            $this->analysis = $value['analysis'];
            unset($value['analysis']);
        }

        if (array_key_exists('dynamic_templates', $value)) {
            $this->_usedProperties['dynamicTemplates'] = true;
            $this->dynamicTemplates = $value['dynamic_templates'];
            unset($value['dynamic_templates']);
        }

        if (array_key_exists('product', $value)) {
            $this->_usedProperties['product'] = true;
            $this->product = new \Symfony\Config\Elasticsearch\ProductConfig($value['product']);
            unset($value['product']);
        }

        if (array_key_exists('administration', $value)) {
            $this->_usedProperties['administration'] = true;
            $this->administration = new \Symfony\Config\Elasticsearch\AdministrationConfig($value['administration']);
            unset($value['administration']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['indexingEnabled'])) {
            $output['indexing_enabled'] = $this->indexingEnabled;
        }
        if (isset($this->_usedProperties['indexingBatchSize'])) {
            $output['indexing_batch_size'] = $this->indexingBatchSize;
        }
        if (isset($this->_usedProperties['hosts'])) {
            $output['hosts'] = $this->hosts;
        }
        if (isset($this->_usedProperties['indexPrefix'])) {
            $output['index_prefix'] = $this->indexPrefix;
        }
        if (isset($this->_usedProperties['throwException'])) {
            $output['throw_exception'] = $this->throwException;
        }
        if (isset($this->_usedProperties['loggerLevel'])) {
            $output['logger_level'] = $this->loggerLevel;
        }
        if (isset($this->_usedProperties['ssl'])) {
            $output['ssl'] = $this->ssl->toArray();
        }
        if (isset($this->_usedProperties['indexSettings'])) {
            $output['index_settings'] = $this->indexSettings;
        }
        if (isset($this->_usedProperties['analysis'])) {
            $output['analysis'] = $this->analysis;
        }
        if (isset($this->_usedProperties['dynamicTemplates'])) {
            $output['dynamic_templates'] = $this->dynamicTemplates;
        }
        if (isset($this->_usedProperties['product'])) {
            $output['product'] = $this->product->toArray();
        }
        if (isset($this->_usedProperties['administration'])) {
            $output['administration'] = $this->administration->toArray();
        }

        return $output;
    }

}
