<?php

namespace Symfony\Config\Elasticsearch;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdministrationConfig 
{
    private $hosts;
    private $enabled;
    private $refreshIndices;
    private $indexPrefix;
    private $indexSettings;
    private $analysis;
    private $dynamicTemplates;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->_usedProperties['hosts'] = true;
        $this->hosts = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function refreshIndices($value): self
    {
        $this->_usedProperties['refreshIndices'] = true;
        $this->refreshIndices = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function indexPrefix($value): self
    {
        $this->_usedProperties['indexPrefix'] = true;
        $this->indexPrefix = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function indexSettings($value): self
    {
        $this->_usedProperties['indexSettings'] = true;
        $this->indexSettings = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function analysis($value): self
    {
        $this->_usedProperties['analysis'] = true;
        $this->analysis = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function dynamicTemplates($value): self
    {
        $this->_usedProperties['dynamicTemplates'] = true;
        $this->dynamicTemplates = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('hosts', $value)) {
            $this->_usedProperties['hosts'] = true;
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('refresh_indices', $value)) {
            $this->_usedProperties['refreshIndices'] = true;
            $this->refreshIndices = $value['refresh_indices'];
            unset($value['refresh_indices']);
        }

        if (array_key_exists('index_prefix', $value)) {
            $this->_usedProperties['indexPrefix'] = true;
            $this->indexPrefix = $value['index_prefix'];
            unset($value['index_prefix']);
        }

        if (array_key_exists('index_settings', $value)) {
            $this->_usedProperties['indexSettings'] = true;
            $this->indexSettings = $value['index_settings'];
            unset($value['index_settings']);
        }

        if (array_key_exists('analysis', $value)) {
            $this->_usedProperties['analysis'] = true;
            $this->analysis = $value['analysis'];
            unset($value['analysis']);
        }

        if (array_key_exists('dynamic_templates', $value)) {
            $this->_usedProperties['dynamicTemplates'] = true;
            $this->dynamicTemplates = $value['dynamic_templates'];
            unset($value['dynamic_templates']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hosts'])) {
            $output['hosts'] = $this->hosts;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['refreshIndices'])) {
            $output['refresh_indices'] = $this->refreshIndices;
        }
        if (isset($this->_usedProperties['indexPrefix'])) {
            $output['index_prefix'] = $this->indexPrefix;
        }
        if (isset($this->_usedProperties['indexSettings'])) {
            $output['index_settings'] = $this->indexSettings;
        }
        if (isset($this->_usedProperties['analysis'])) {
            $output['analysis'] = $this->analysis;
        }
        if (isset($this->_usedProperties['dynamicTemplates'])) {
            $output['dynamic_templates'] = $this->dynamicTemplates;
        }

        return $output;
    }

}
