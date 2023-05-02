<?php

namespace Symfony\Config\Storefront;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpCacheConfig 
{
    private $staleWhileRevalidate;
    private $staleIfError;
    private $ignoredUrlParameters;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function staleWhileRevalidate($value): self
    {
        $this->_usedProperties['staleWhileRevalidate'] = true;
        $this->staleWhileRevalidate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function staleIfError($value): self
    {
        $this->_usedProperties['staleIfError'] = true;
        $this->staleIfError = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function ignoredUrlParameters($value): self
    {
        $this->_usedProperties['ignoredUrlParameters'] = true;
        $this->ignoredUrlParameters = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('stale_while_revalidate', $value)) {
            $this->_usedProperties['staleWhileRevalidate'] = true;
            $this->staleWhileRevalidate = $value['stale_while_revalidate'];
            unset($value['stale_while_revalidate']);
        }

        if (array_key_exists('stale_if_error', $value)) {
            $this->_usedProperties['staleIfError'] = true;
            $this->staleIfError = $value['stale_if_error'];
            unset($value['stale_if_error']);
        }

        if (array_key_exists('ignored_url_parameters', $value)) {
            $this->_usedProperties['ignoredUrlParameters'] = true;
            $this->ignoredUrlParameters = $value['ignored_url_parameters'];
            unset($value['ignored_url_parameters']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['staleWhileRevalidate'])) {
            $output['stale_while_revalidate'] = $this->staleWhileRevalidate;
        }
        if (isset($this->_usedProperties['staleIfError'])) {
            $output['stale_if_error'] = $this->staleIfError;
        }
        if (isset($this->_usedProperties['ignoredUrlParameters'])) {
            $output['ignored_url_parameters'] = $this->ignoredUrlParameters;
        }

        return $output;
    }

}
