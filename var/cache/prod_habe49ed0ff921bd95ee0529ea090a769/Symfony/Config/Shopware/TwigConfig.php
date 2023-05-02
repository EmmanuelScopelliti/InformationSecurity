<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigConfig 
{
    private $allowedPhpFunctions;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowedPhpFunctions($value): self
    {
        $this->_usedProperties['allowedPhpFunctions'] = true;
        $this->allowedPhpFunctions = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowed_php_functions', $value)) {
            $this->_usedProperties['allowedPhpFunctions'] = true;
            $this->allowedPhpFunctions = $value['allowed_php_functions'];
            unset($value['allowed_php_functions']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowedPhpFunctions'])) {
            $output['allowed_php_functions'] = $this->allowedPhpFunctions;
        }

        return $output;
    }

}
