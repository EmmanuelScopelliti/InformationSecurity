<?php

namespace Symfony\Config\Shopware\HtmlSanitizer;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FieldsConfig 
{
    private $name;
    private $sets;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function sets($value): self
    {
        $this->_usedProperties['sets'] = true;
        $this->sets = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('sets', $value)) {
            $this->_usedProperties['sets'] = true;
            $this->sets = $value['sets'];
            unset($value['sets']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['sets'])) {
            $output['sets'] = $this->sets;
        }

        return $output;
    }

}
