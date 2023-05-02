<?php

namespace Symfony\Config\Storefront;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ThemeConfig 
{
    private $configLoaderId;
    private $themePathBuilderId;
    private $availableThemeProvider;
    private $_usedProperties = [];

    /**
     * @default 'Shopware\\Storefront\\Theme\\ConfigLoader\\DatabaseConfigLoader'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configLoaderId($value): self
    {
        $this->_usedProperties['configLoaderId'] = true;
        $this->configLoaderId = $value;

        return $this;
    }

    /**
     * @default 'Shopware\\Storefront\\Theme\\MD5ThemePathBuilder'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function themePathBuilderId($value): self
    {
        $this->_usedProperties['themePathBuilderId'] = true;
        $this->themePathBuilderId = $value;

        return $this;
    }

    /**
     * @default 'Shopware\\Storefront\\Theme\\ConfigLoader\\DatabaseAvailableThemeProvider'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function availableThemeProvider($value): self
    {
        $this->_usedProperties['availableThemeProvider'] = true;
        $this->availableThemeProvider = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('config_loader_id', $value)) {
            $this->_usedProperties['configLoaderId'] = true;
            $this->configLoaderId = $value['config_loader_id'];
            unset($value['config_loader_id']);
        }

        if (array_key_exists('theme_path_builder_id', $value)) {
            $this->_usedProperties['themePathBuilderId'] = true;
            $this->themePathBuilderId = $value['theme_path_builder_id'];
            unset($value['theme_path_builder_id']);
        }

        if (array_key_exists('available_theme_provider', $value)) {
            $this->_usedProperties['availableThemeProvider'] = true;
            $this->availableThemeProvider = $value['available_theme_provider'];
            unset($value['available_theme_provider']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['configLoaderId'])) {
            $output['config_loader_id'] = $this->configLoaderId;
        }
        if (isset($this->_usedProperties['themePathBuilderId'])) {
            $output['theme_path_builder_id'] = $this->themePathBuilderId;
        }
        if (isset($this->_usedProperties['availableThemeProvider'])) {
            $output['available_theme_provider'] = $this->availableThemeProvider;
        }

        return $output;
    }

}
