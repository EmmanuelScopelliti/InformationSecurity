<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DeploymentConfig 
{
    private $blueGreen;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function blueGreen($value): self
    {
        $this->_usedProperties['blueGreen'] = true;
        $this->blueGreen = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('blue_green', $value)) {
            $this->_usedProperties['blueGreen'] = true;
            $this->blueGreen = $value['blue_green'];
            unset($value['blue_green']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['blueGreen'])) {
            $output['blue_green'] = $this->blueGreen;
        }

        return $output;
    }

}
