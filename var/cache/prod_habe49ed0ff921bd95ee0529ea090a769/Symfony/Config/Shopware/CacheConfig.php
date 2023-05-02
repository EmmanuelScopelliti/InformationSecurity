<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'InvalidationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CacheConfig 
{
    private $redisPrefix;
    private $invalidation;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisPrefix($value): self
    {
        $this->_usedProperties['redisPrefix'] = true;
        $this->redisPrefix = $value;

        return $this;
    }

    public function invalidation(array $value = []): \Symfony\Config\Shopware\Cache\InvalidationConfig
    {
        if (null === $this->invalidation) {
            $this->_usedProperties['invalidation'] = true;
            $this->invalidation = new \Symfony\Config\Shopware\Cache\InvalidationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "invalidation()" has already been initialized. You cannot pass values the second time you call invalidation().');
        }

        return $this->invalidation;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('redis_prefix', $value)) {
            $this->_usedProperties['redisPrefix'] = true;
            $this->redisPrefix = $value['redis_prefix'];
            unset($value['redis_prefix']);
        }

        if (array_key_exists('invalidation', $value)) {
            $this->_usedProperties['invalidation'] = true;
            $this->invalidation = new \Symfony\Config\Shopware\Cache\InvalidationConfig($value['invalidation']);
            unset($value['invalidation']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['redisPrefix'])) {
            $output['redis_prefix'] = $this->redisPrefix;
        }
        if (isset($this->_usedProperties['invalidation'])) {
            $output['invalidation'] = $this->invalidation->toArray();
        }

        return $output;
    }

}
