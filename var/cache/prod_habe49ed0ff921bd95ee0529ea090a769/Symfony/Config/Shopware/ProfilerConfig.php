<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProfilerConfig 
{
    private $integrations;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function integrations($value): self
    {
        $this->_usedProperties['integrations'] = true;
        $this->integrations = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('integrations', $value)) {
            $this->_usedProperties['integrations'] = true;
            $this->integrations = $value['integrations'];
            unset($value['integrations']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['integrations'])) {
            $output['integrations'] = $this->integrations;
        }

        return $output;
    }

}
