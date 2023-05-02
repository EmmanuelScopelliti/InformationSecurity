<?php

namespace Symfony\Config\Shopware\Api;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ApiBrowserConfig 
{
    private $authRequired;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function authRequired($value): self
    {
        $this->_usedProperties['authRequired'] = true;
        $this->authRequired = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('auth_required', $value)) {
            $this->_usedProperties['authRequired'] = true;
            $this->authRequired = $value['auth_required'];
            unset($value['auth_required']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authRequired'])) {
            $output['auth_required'] = $this->authRequired;
        }

        return $output;
    }

}
