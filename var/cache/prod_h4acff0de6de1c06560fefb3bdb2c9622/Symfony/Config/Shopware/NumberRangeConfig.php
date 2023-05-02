<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NumberRangeConfig 
{
    private $incrementStorage;
    private $redisUrl;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function incrementStorage($value): self
    {
        $this->_usedProperties['incrementStorage'] = true;
        $this->incrementStorage = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisUrl($value): self
    {
        $this->_usedProperties['redisUrl'] = true;
        $this->redisUrl = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('increment_storage', $value)) {
            $this->_usedProperties['incrementStorage'] = true;
            $this->incrementStorage = $value['increment_storage'];
            unset($value['increment_storage']);
        }

        if (array_key_exists('redis_url', $value)) {
            $this->_usedProperties['redisUrl'] = true;
            $this->redisUrl = $value['redis_url'];
            unset($value['redis_url']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['incrementStorage'])) {
            $output['increment_storage'] = $this->incrementStorage;
        }
        if (isset($this->_usedProperties['redisUrl'])) {
            $output['redis_url'] = $this->redisUrl;
        }

        return $output;
    }

}
