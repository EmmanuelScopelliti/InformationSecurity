<?php

namespace Symfony\Config\Elasticsearch;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProductConfig 
{
    private $customFieldsMapping;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function customFieldsMapping($value): self
    {
        $this->_usedProperties['customFieldsMapping'] = true;
        $this->customFieldsMapping = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('custom_fields_mapping', $value)) {
            $this->_usedProperties['customFieldsMapping'] = true;
            $this->customFieldsMapping = $value['custom_fields_mapping'];
            unset($value['custom_fields_mapping']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['customFieldsMapping'])) {
            $output['custom_fields_mapping'] = $this->customFieldsMapping;
        }

        return $output;
    }

}
