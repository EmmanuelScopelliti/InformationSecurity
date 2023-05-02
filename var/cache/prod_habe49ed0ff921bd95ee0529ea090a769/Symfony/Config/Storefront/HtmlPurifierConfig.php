<?php

namespace Symfony\Config\Storefront;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HtmlPurifierConfig 
{
    private $cacheDir;
    private $cacheEnabled;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated Use html_sanitizer configuration from shopware/core bundle instead
     * @return $this
     */
    public function cacheDir($value): self
    {
        $this->_usedProperties['cacheDir'] = true;
        $this->cacheDir = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @deprecated Use html_sanitizer configuration from shopware/core bundle instead
     * @return $this
     */
    public function cacheEnabled($value): self
    {
        $this->_usedProperties['cacheEnabled'] = true;
        $this->cacheEnabled = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cacheDir', $value)) {
            $this->_usedProperties['cacheDir'] = true;
            $this->cacheDir = $value['cacheDir'];
            unset($value['cacheDir']);
        }

        if (array_key_exists('cacheEnabled', $value)) {
            $this->_usedProperties['cacheEnabled'] = true;
            $this->cacheEnabled = $value['cacheEnabled'];
            unset($value['cacheEnabled']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cacheDir'])) {
            $output['cacheDir'] = $this->cacheDir;
        }
        if (isset($this->_usedProperties['cacheEnabled'])) {
            $output['cacheEnabled'] = $this->cacheEnabled;
        }

        return $output;
    }

}
