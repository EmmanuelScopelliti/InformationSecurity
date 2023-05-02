<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StoreConfig 
{
    private $frw;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function frw($value): self
    {
        $this->_usedProperties['frw'] = true;
        $this->frw = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('frw', $value)) {
            $this->_usedProperties['frw'] = true;
            $this->frw = $value['frw'];
            unset($value['frw']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['frw'])) {
            $output['frw'] = $this->frw;
        }

        return $output;
    }

}
