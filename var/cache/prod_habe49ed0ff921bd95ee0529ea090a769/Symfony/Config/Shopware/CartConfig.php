<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CartConfig 
{
    private $compress;
    private $expireDays;
    private $redisUrl;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function compress($value): self
    {
        $this->_usedProperties['compress'] = true;
        $this->compress = $value;

        return $this;
    }

    /**
     * @default 120
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function expireDays($value): self
    {
        $this->_usedProperties['expireDays'] = true;
        $this->expireDays = $value;

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
        if (array_key_exists('compress', $value)) {
            $this->_usedProperties['compress'] = true;
            $this->compress = $value['compress'];
            unset($value['compress']);
        }

        if (array_key_exists('expire_days', $value)) {
            $this->_usedProperties['expireDays'] = true;
            $this->expireDays = $value['expire_days'];
            unset($value['expire_days']);
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
        if (isset($this->_usedProperties['compress'])) {
            $output['compress'] = $this->compress;
        }
        if (isset($this->_usedProperties['expireDays'])) {
            $output['expire_days'] = $this->expireDays;
        }
        if (isset($this->_usedProperties['redisUrl'])) {
            $output['redis_url'] = $this->redisUrl;
        }

        return $output;
    }

}
