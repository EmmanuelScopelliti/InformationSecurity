<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Feature'.\DIRECTORY_SEPARATOR.'FlagsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FeatureConfig 
{
    private $flags;
    private $_usedProperties = [];

    /**
     * @return \Symfony\Config\Shopware\Feature\FlagsConfig|$this
     */
    public function flags(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['flags'] = true;
            $this->flags[$name] = $value;

            return $this;
        }

        if (!isset($this->flags[$name]) || !$this->flags[$name] instanceof \Symfony\Config\Shopware\Feature\FlagsConfig) {
            $this->_usedProperties['flags'] = true;
            $this->flags[$name] = new \Symfony\Config\Shopware\Feature\FlagsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "flags()" has already been initialized. You cannot pass values the second time you call flags().');
        }

        return $this->flags[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('flags', $value)) {
            $this->_usedProperties['flags'] = true;
            $this->flags = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Shopware\Feature\FlagsConfig($v) : $v; }, $value['flags']);
            unset($value['flags']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['flags'])) {
            $output['flags'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Shopware\Feature\FlagsConfig ? $v->toArray() : $v; }, $this->flags);
        }

        return $output;
    }

}
