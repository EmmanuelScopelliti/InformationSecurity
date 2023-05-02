<?php

namespace Symfony\Config\Elasticsearch;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SslConfig 
{
    private $certPath;
    private $certPassword;
    private $certKeyPath;
    private $certKeyPassword;
    private $verifyServerCert;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certPath($value): self
    {
        $this->_usedProperties['certPath'] = true;
        $this->certPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certPassword($value): self
    {
        $this->_usedProperties['certPassword'] = true;
        $this->certPassword = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certKeyPath($value): self
    {
        $this->_usedProperties['certKeyPath'] = true;
        $this->certKeyPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certKeyPassword($value): self
    {
        $this->_usedProperties['certKeyPassword'] = true;
        $this->certKeyPassword = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function verifyServerCert($value): self
    {
        $this->_usedProperties['verifyServerCert'] = true;
        $this->verifyServerCert = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cert_path', $value)) {
            $this->_usedProperties['certPath'] = true;
            $this->certPath = $value['cert_path'];
            unset($value['cert_path']);
        }

        if (array_key_exists('cert_password', $value)) {
            $this->_usedProperties['certPassword'] = true;
            $this->certPassword = $value['cert_password'];
            unset($value['cert_password']);
        }

        if (array_key_exists('cert_key_path', $value)) {
            $this->_usedProperties['certKeyPath'] = true;
            $this->certKeyPath = $value['cert_key_path'];
            unset($value['cert_key_path']);
        }

        if (array_key_exists('cert_key_password', $value)) {
            $this->_usedProperties['certKeyPassword'] = true;
            $this->certKeyPassword = $value['cert_key_password'];
            unset($value['cert_key_password']);
        }

        if (array_key_exists('verify_server_cert', $value)) {
            $this->_usedProperties['verifyServerCert'] = true;
            $this->verifyServerCert = $value['verify_server_cert'];
            unset($value['verify_server_cert']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['certPath'])) {
            $output['cert_path'] = $this->certPath;
        }
        if (isset($this->_usedProperties['certPassword'])) {
            $output['cert_password'] = $this->certPassword;
        }
        if (isset($this->_usedProperties['certKeyPath'])) {
            $output['cert_key_path'] = $this->certKeyPath;
        }
        if (isset($this->_usedProperties['certKeyPassword'])) {
            $output['cert_key_password'] = $this->certKeyPassword;
        }
        if (isset($this->_usedProperties['verifyServerCert'])) {
            $output['verify_server_cert'] = $this->verifyServerCert;
        }

        return $output;
    }

}
