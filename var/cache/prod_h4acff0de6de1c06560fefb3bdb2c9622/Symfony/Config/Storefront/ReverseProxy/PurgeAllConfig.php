<?php

namespace Symfony\Config\Storefront\ReverseProxy;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PurgeAllConfig 
{
    private $banMethod;
    private $banHeaders;
    private $urls;
    private $_usedProperties = [];

    /**
     * @default 'BAN'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function banMethod($value): self
    {
        $this->_usedProperties['banMethod'] = true;
        $this->banMethod = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function banHeaders($value): self
    {
        $this->_usedProperties['banHeaders'] = true;
        $this->banHeaders = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function urls($value): self
    {
        $this->_usedProperties['urls'] = true;
        $this->urls = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('ban_method', $value)) {
            $this->_usedProperties['banMethod'] = true;
            $this->banMethod = $value['ban_method'];
            unset($value['ban_method']);
        }

        if (array_key_exists('ban_headers', $value)) {
            $this->_usedProperties['banHeaders'] = true;
            $this->banHeaders = $value['ban_headers'];
            unset($value['ban_headers']);
        }

        if (array_key_exists('urls', $value)) {
            $this->_usedProperties['urls'] = true;
            $this->urls = $value['urls'];
            unset($value['urls']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['banMethod'])) {
            $output['ban_method'] = $this->banMethod;
        }
        if (isset($this->_usedProperties['banHeaders'])) {
            $output['ban_headers'] = $this->banHeaders;
        }
        if (isset($this->_usedProperties['urls'])) {
            $output['urls'] = $this->urls;
        }

        return $output;
    }

}
