<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LoggerConfig 
{
    private $fileRotationCount;
    private $excludeException;
    private $excludeEvents;
    private $_usedProperties = [];

    /**
     * @default 14
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function fileRotationCount($value): self
    {
        $this->_usedProperties['fileRotationCount'] = true;
        $this->fileRotationCount = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excludeException($value): self
    {
        $this->_usedProperties['excludeException'] = true;
        $this->excludeException = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excludeEvents($value): self
    {
        $this->_usedProperties['excludeEvents'] = true;
        $this->excludeEvents = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('file_rotation_count', $value)) {
            $this->_usedProperties['fileRotationCount'] = true;
            $this->fileRotationCount = $value['file_rotation_count'];
            unset($value['file_rotation_count']);
        }

        if (array_key_exists('exclude_exception', $value)) {
            $this->_usedProperties['excludeException'] = true;
            $this->excludeException = $value['exclude_exception'];
            unset($value['exclude_exception']);
        }

        if (array_key_exists('exclude_events', $value)) {
            $this->_usedProperties['excludeEvents'] = true;
            $this->excludeEvents = $value['exclude_events'];
            unset($value['exclude_events']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['fileRotationCount'])) {
            $output['file_rotation_count'] = $this->fileRotationCount;
        }
        if (isset($this->_usedProperties['excludeException'])) {
            $output['exclude_exception'] = $this->excludeException;
        }
        if (isset($this->_usedProperties['excludeEvents'])) {
            $output['exclude_events'] = $this->excludeEvents;
        }

        return $output;
    }

}
