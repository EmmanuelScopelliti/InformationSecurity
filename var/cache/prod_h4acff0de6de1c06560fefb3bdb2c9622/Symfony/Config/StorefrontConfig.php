<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'CsrfConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'HtmlPurifierConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'ReverseProxyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'HttpCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'ThemeConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorefrontConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $csrf;
    private $htmlPurifier;
    private $reverseProxy;
    private $httpCache;
    private $theme;
    private $_usedProperties = [];

    public function csrf(array $value = []): \Symfony\Config\Storefront\CsrfConfig
    {
        if (null === $this->csrf) {
            $this->_usedProperties['csrf'] = true;
            $this->csrf = new \Symfony\Config\Storefront\CsrfConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "csrf()" has already been initialized. You cannot pass values the second time you call csrf().');
        }

        return $this->csrf;
    }

    public function htmlPurifier(array $value = []): \Symfony\Config\Storefront\HtmlPurifierConfig
    {
        if (null === $this->htmlPurifier) {
            $this->_usedProperties['htmlPurifier'] = true;
            $this->htmlPurifier = new \Symfony\Config\Storefront\HtmlPurifierConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "htmlPurifier()" has already been initialized. You cannot pass values the second time you call htmlPurifier().');
        }

        return $this->htmlPurifier;
    }

    public function reverseProxy(array $value = []): \Symfony\Config\Storefront\ReverseProxyConfig
    {
        if (null === $this->reverseProxy) {
            $this->_usedProperties['reverseProxy'] = true;
            $this->reverseProxy = new \Symfony\Config\Storefront\ReverseProxyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "reverseProxy()" has already been initialized. You cannot pass values the second time you call reverseProxy().');
        }

        return $this->reverseProxy;
    }

    public function httpCache(array $value = []): \Symfony\Config\Storefront\HttpCacheConfig
    {
        if (null === $this->httpCache) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = new \Symfony\Config\Storefront\HttpCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpCache()" has already been initialized. You cannot pass values the second time you call httpCache().');
        }

        return $this->httpCache;
    }

    public function theme(array $value = []): \Symfony\Config\Storefront\ThemeConfig
    {
        if (null === $this->theme) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\Storefront\ThemeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "theme()" has already been initialized. You cannot pass values the second time you call theme().');
        }

        return $this->theme;
    }

    public function getExtensionAlias(): string
    {
        return 'storefront';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('csrf', $value)) {
            $this->_usedProperties['csrf'] = true;
            $this->csrf = new \Symfony\Config\Storefront\CsrfConfig($value['csrf']);
            unset($value['csrf']);
        }

        if (array_key_exists('htmlPurifier', $value)) {
            $this->_usedProperties['htmlPurifier'] = true;
            $this->htmlPurifier = new \Symfony\Config\Storefront\HtmlPurifierConfig($value['htmlPurifier']);
            unset($value['htmlPurifier']);
        }

        if (array_key_exists('reverse_proxy', $value)) {
            $this->_usedProperties['reverseProxy'] = true;
            $this->reverseProxy = new \Symfony\Config\Storefront\ReverseProxyConfig($value['reverse_proxy']);
            unset($value['reverse_proxy']);
        }

        if (array_key_exists('http_cache', $value)) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = new \Symfony\Config\Storefront\HttpCacheConfig($value['http_cache']);
            unset($value['http_cache']);
        }

        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\Storefront\ThemeConfig($value['theme']);
            unset($value['theme']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['csrf'])) {
            $output['csrf'] = $this->csrf->toArray();
        }
        if (isset($this->_usedProperties['htmlPurifier'])) {
            $output['htmlPurifier'] = $this->htmlPurifier->toArray();
        }
        if (isset($this->_usedProperties['reverseProxy'])) {
            $output['reverse_proxy'] = $this->reverseProxy->toArray();
        }
        if (isset($this->_usedProperties['httpCache'])) {
            $output['http_cache'] = $this->httpCache->toArray();
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme->toArray();
        }

        return $output;
    }

}
