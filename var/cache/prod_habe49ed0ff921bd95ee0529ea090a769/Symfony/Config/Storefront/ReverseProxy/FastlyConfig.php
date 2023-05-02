<?php

namespace Symfony\Config\Storefront\ReverseProxy;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FastlyConfig 
{
    private $enabled;
    private $apiKey;
    private $instanceTag;
    private $serviceId;
    private $softPurge;
    private $tagPrefix;
    private $_usedProperties = [];

    /**
     * @default false
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
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): self
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function instanceTag($value): self
    {
        $this->_usedProperties['instanceTag'] = true;
        $this->instanceTag = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceId($value): self
    {
        $this->_usedProperties['serviceId'] = true;
        $this->serviceId = $value;

        return $this;
    }

    /**
     * @default '0'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function softPurge($value): self
    {
        $this->_usedProperties['softPurge'] = true;
        $this->softPurge = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tagPrefix($value): self
    {
        $this->_usedProperties['tagPrefix'] = true;
        $this->tagPrefix = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if (array_key_exists('instance_tag', $value)) {
            $this->_usedProperties['instanceTag'] = true;
            $this->instanceTag = $value['instance_tag'];
            unset($value['instance_tag']);
        }

        if (array_key_exists('service_id', $value)) {
            $this->_usedProperties['serviceId'] = true;
            $this->serviceId = $value['service_id'];
            unset($value['service_id']);
        }

        if (array_key_exists('soft_purge', $value)) {
            $this->_usedProperties['softPurge'] = true;
            $this->softPurge = $value['soft_purge'];
            unset($value['soft_purge']);
        }

        if (array_key_exists('tag_prefix', $value)) {
            $this->_usedProperties['tagPrefix'] = true;
            $this->tagPrefix = $value['tag_prefix'];
            unset($value['tag_prefix']);
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
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['instanceTag'])) {
            $output['instance_tag'] = $this->instanceTag;
        }
        if (isset($this->_usedProperties['serviceId'])) {
            $output['service_id'] = $this->serviceId;
        }
        if (isset($this->_usedProperties['softPurge'])) {
            $output['soft_purge'] = $this->softPurge;
        }
        if (isset($this->_usedProperties['tagPrefix'])) {
            $output['tag_prefix'] = $this->tagPrefix;
        }

        return $output;
    }

}
