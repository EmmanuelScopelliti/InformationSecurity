<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SalesChannelContextConfig 
{
    private $expireDays;
    private $_usedProperties = [];

    /**
     * @default 120
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function expireDays($value): self
    {
        $this->_usedProperties['expireDays'] = true;
        $this->expireDays = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('expire_days', $value)) {
            $this->_usedProperties['expireDays'] = true;
            $this->expireDays = $value['expire_days'];
            unset($value['expire_days']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['expireDays'])) {
            $output['expire_days'] = $this->expireDays;
        }

        return $output;
    }

}
