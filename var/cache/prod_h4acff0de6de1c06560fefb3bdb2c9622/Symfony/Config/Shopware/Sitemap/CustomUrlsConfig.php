<?php

namespace Symfony\Config\Shopware\Sitemap;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomUrlsConfig 
{
    private $url;
    private $lastMod;
    private $changeFreq;
    private $priority;
    private $salesChannelId;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lastMod($value): self
    {
        $this->_usedProperties['lastMod'] = true;
        $this->lastMod = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|'always'|'hourly'|'daily'|'weekly'|'monthly'|'yearly' $value
     * @return $this
     */
    public function changeFreq($value): self
    {
        $this->_usedProperties['changeFreq'] = true;
        $this->changeFreq = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function priority($value): self
    {
        $this->_usedProperties['priority'] = true;
        $this->priority = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function salesChannelId($value): self
    {
        $this->_usedProperties['salesChannelId'] = true;
        $this->salesChannelId = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('lastMod', $value)) {
            $this->_usedProperties['lastMod'] = true;
            $this->lastMod = $value['lastMod'];
            unset($value['lastMod']);
        }

        if (array_key_exists('changeFreq', $value)) {
            $this->_usedProperties['changeFreq'] = true;
            $this->changeFreq = $value['changeFreq'];
            unset($value['changeFreq']);
        }

        if (array_key_exists('priority', $value)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $value['priority'];
            unset($value['priority']);
        }

        if (array_key_exists('salesChannelId', $value)) {
            $this->_usedProperties['salesChannelId'] = true;
            $this->salesChannelId = $value['salesChannelId'];
            unset($value['salesChannelId']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['lastMod'])) {
            $output['lastMod'] = $this->lastMod;
        }
        if (isset($this->_usedProperties['changeFreq'])) {
            $output['changeFreq'] = $this->changeFreq;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }
        if (isset($this->_usedProperties['salesChannelId'])) {
            $output['salesChannelId'] = $this->salesChannelId;
        }

        return $output;
    }

}
