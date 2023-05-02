<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Sitemap'.\DIRECTORY_SEPARATOR.'CustomUrlsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sitemap'.\DIRECTORY_SEPARATOR.'ExcludedUrlsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SitemapConfig 
{
    private $customUrls;
    private $excludedUrls;
    private $batchsize;
    private $_usedProperties = [];

    public function customUrls(array $value = []): \Symfony\Config\Shopware\Sitemap\CustomUrlsConfig
    {
        $this->_usedProperties['customUrls'] = true;

        return $this->customUrls[] = new \Symfony\Config\Shopware\Sitemap\CustomUrlsConfig($value);
    }

    public function excludedUrls(array $value = []): \Symfony\Config\Shopware\Sitemap\ExcludedUrlsConfig
    {
        $this->_usedProperties['excludedUrls'] = true;

        return $this->excludedUrls[] = new \Symfony\Config\Shopware\Sitemap\ExcludedUrlsConfig($value);
    }

    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function batchsize($value): self
    {
        $this->_usedProperties['batchsize'] = true;
        $this->batchsize = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('custom_urls', $value)) {
            $this->_usedProperties['customUrls'] = true;
            $this->customUrls = array_map(function ($v) { return new \Symfony\Config\Shopware\Sitemap\CustomUrlsConfig($v); }, $value['custom_urls']);
            unset($value['custom_urls']);
        }

        if (array_key_exists('excluded_urls', $value)) {
            $this->_usedProperties['excludedUrls'] = true;
            $this->excludedUrls = array_map(function ($v) { return new \Symfony\Config\Shopware\Sitemap\ExcludedUrlsConfig($v); }, $value['excluded_urls']);
            unset($value['excluded_urls']);
        }

        if (array_key_exists('batchsize', $value)) {
            $this->_usedProperties['batchsize'] = true;
            $this->batchsize = $value['batchsize'];
            unset($value['batchsize']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['customUrls'])) {
            $output['custom_urls'] = array_map(function ($v) { return $v->toArray(); }, $this->customUrls);
        }
        if (isset($this->_usedProperties['excludedUrls'])) {
            $output['excluded_urls'] = array_map(function ($v) { return $v->toArray(); }, $this->excludedUrls);
        }
        if (isset($this->_usedProperties['batchsize'])) {
            $output['batchsize'] = $this->batchsize;
        }

        return $output;
    }

}
