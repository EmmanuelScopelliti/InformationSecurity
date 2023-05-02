<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdminWorkerConfig 
{
    private $transports;
    private $pollInterval;
    private $enableAdminWorker;
    private $memoryLimit;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function transports($value): self
    {
        $this->_usedProperties['transports'] = true;
        $this->transports = $value;

        return $this;
    }

    /**
     * @default 20
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pollInterval($value): self
    {
        $this->_usedProperties['pollInterval'] = true;
        $this->pollInterval = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableAdminWorker($value): self
    {
        $this->_usedProperties['enableAdminWorker'] = true;
        $this->enableAdminWorker = $value;

        return $this;
    }

    /**
     * @default '128M'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function memoryLimit($value): self
    {
        $this->_usedProperties['memoryLimit'] = true;
        $this->memoryLimit = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('transports', $value)) {
            $this->_usedProperties['transports'] = true;
            $this->transports = $value['transports'];
            unset($value['transports']);
        }

        if (array_key_exists('poll_interval', $value)) {
            $this->_usedProperties['pollInterval'] = true;
            $this->pollInterval = $value['poll_interval'];
            unset($value['poll_interval']);
        }

        if (array_key_exists('enable_admin_worker', $value)) {
            $this->_usedProperties['enableAdminWorker'] = true;
            $this->enableAdminWorker = $value['enable_admin_worker'];
            unset($value['enable_admin_worker']);
        }

        if (array_key_exists('memory_limit', $value)) {
            $this->_usedProperties['memoryLimit'] = true;
            $this->memoryLimit = $value['memory_limit'];
            unset($value['memory_limit']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['transports'])) {
            $output['transports'] = $this->transports;
        }
        if (isset($this->_usedProperties['pollInterval'])) {
            $output['poll_interval'] = $this->pollInterval;
        }
        if (isset($this->_usedProperties['enableAdminWorker'])) {
            $output['enable_admin_worker'] = $this->enableAdminWorker;
        }
        if (isset($this->_usedProperties['memoryLimit'])) {
            $output['memory_limit'] = $this->memoryLimit;
        }

        return $output;
    }

}
