<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'PrivateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'PublicConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'TempConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'ThemeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'AssetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'SitemapConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class FilesystemConfig 
{
    private $private;
    private $public;
    private $temp;
    private $theme;
    private $asset;
    private $sitemap;
    private $allowedExtensions;
    private $privateAllowedExtensions;
    private $privateLocalDownloadStrategy;
    private $_usedProperties = [];

    public function private(array $value = []): \Symfony\Config\Shopware\Filesystem\PrivateConfig
    {
        if (null === $this->private) {
            $this->_usedProperties['private'] = true;
            $this->private = new \Symfony\Config\Shopware\Filesystem\PrivateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "private()" has already been initialized. You cannot pass values the second time you call private().');
        }

        return $this->private;
    }

    public function public(array $value = []): \Symfony\Config\Shopware\Filesystem\PublicConfig
    {
        if (null === $this->public) {
            $this->_usedProperties['public'] = true;
            $this->public = new \Symfony\Config\Shopware\Filesystem\PublicConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "public()" has already been initialized. You cannot pass values the second time you call public().');
        }

        return $this->public;
    }

    public function temp(array $value = []): \Symfony\Config\Shopware\Filesystem\TempConfig
    {
        if (null === $this->temp) {
            $this->_usedProperties['temp'] = true;
            $this->temp = new \Symfony\Config\Shopware\Filesystem\TempConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "temp()" has already been initialized. You cannot pass values the second time you call temp().');
        }

        return $this->temp;
    }

    public function theme(array $value = []): \Symfony\Config\Shopware\Filesystem\ThemeConfig
    {
        if (null === $this->theme) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\Shopware\Filesystem\ThemeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "theme()" has already been initialized. You cannot pass values the second time you call theme().');
        }

        return $this->theme;
    }

    public function asset(array $value = []): \Symfony\Config\Shopware\Filesystem\AssetConfig
    {
        if (null === $this->asset) {
            $this->_usedProperties['asset'] = true;
            $this->asset = new \Symfony\Config\Shopware\Filesystem\AssetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "asset()" has already been initialized. You cannot pass values the second time you call asset().');
        }

        return $this->asset;
    }

    public function sitemap(array $value = []): \Symfony\Config\Shopware\Filesystem\SitemapConfig
    {
        if (null === $this->sitemap) {
            $this->_usedProperties['sitemap'] = true;
            $this->sitemap = new \Symfony\Config\Shopware\Filesystem\SitemapConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sitemap()" has already been initialized. You cannot pass values the second time you call sitemap().');
        }

        return $this->sitemap;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowedExtensions($value): self
    {
        $this->_usedProperties['allowedExtensions'] = true;
        $this->allowedExtensions = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function privateAllowedExtensions($value): self
    {
        $this->_usedProperties['privateAllowedExtensions'] = true;
        $this->privateAllowedExtensions = $value;

        return $this;
    }

    /**
     * @default 'php'
     * @param ParamConfigurator|'php'|'x-sendfile'|'x-accel' $value
     * @return $this
     */
    public function privateLocalDownloadStrategy($value): self
    {
        $this->_usedProperties['privateLocalDownloadStrategy'] = true;
        $this->privateLocalDownloadStrategy = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('private', $value)) {
            $this->_usedProperties['private'] = true;
            $this->private = new \Symfony\Config\Shopware\Filesystem\PrivateConfig($value['private']);
            unset($value['private']);
        }

        if (array_key_exists('public', $value)) {
            $this->_usedProperties['public'] = true;
            $this->public = new \Symfony\Config\Shopware\Filesystem\PublicConfig($value['public']);
            unset($value['public']);
        }

        if (array_key_exists('temp', $value)) {
            $this->_usedProperties['temp'] = true;
            $this->temp = new \Symfony\Config\Shopware\Filesystem\TempConfig($value['temp']);
            unset($value['temp']);
        }

        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\Shopware\Filesystem\ThemeConfig($value['theme']);
            unset($value['theme']);
        }

        if (array_key_exists('asset', $value)) {
            $this->_usedProperties['asset'] = true;
            $this->asset = new \Symfony\Config\Shopware\Filesystem\AssetConfig($value['asset']);
            unset($value['asset']);
        }

        if (array_key_exists('sitemap', $value)) {
            $this->_usedProperties['sitemap'] = true;
            $this->sitemap = new \Symfony\Config\Shopware\Filesystem\SitemapConfig($value['sitemap']);
            unset($value['sitemap']);
        }

        if (array_key_exists('allowed_extensions', $value)) {
            $this->_usedProperties['allowedExtensions'] = true;
            $this->allowedExtensions = $value['allowed_extensions'];
            unset($value['allowed_extensions']);
        }

        if (array_key_exists('private_allowed_extensions', $value)) {
            $this->_usedProperties['privateAllowedExtensions'] = true;
            $this->privateAllowedExtensions = $value['private_allowed_extensions'];
            unset($value['private_allowed_extensions']);
        }

        if (array_key_exists('private_local_download_strategy', $value)) {
            $this->_usedProperties['privateLocalDownloadStrategy'] = true;
            $this->privateLocalDownloadStrategy = $value['private_local_download_strategy'];
            unset($value['private_local_download_strategy']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['private'])) {
            $output['private'] = $this->private->toArray();
        }
        if (isset($this->_usedProperties['public'])) {
            $output['public'] = $this->public->toArray();
        }
        if (isset($this->_usedProperties['temp'])) {
            $output['temp'] = $this->temp->toArray();
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme->toArray();
        }
        if (isset($this->_usedProperties['asset'])) {
            $output['asset'] = $this->asset->toArray();
        }
        if (isset($this->_usedProperties['sitemap'])) {
            $output['sitemap'] = $this->sitemap->toArray();
        }
        if (isset($this->_usedProperties['allowedExtensions'])) {
            $output['allowed_extensions'] = $this->allowedExtensions;
        }
        if (isset($this->_usedProperties['privateAllowedExtensions'])) {
            $output['private_allowed_extensions'] = $this->privateAllowedExtensions;
        }
        if (isset($this->_usedProperties['privateLocalDownloadStrategy'])) {
            $output['private_local_download_strategy'] = $this->privateLocalDownloadStrategy;
        }

        return $output;
    }

}
