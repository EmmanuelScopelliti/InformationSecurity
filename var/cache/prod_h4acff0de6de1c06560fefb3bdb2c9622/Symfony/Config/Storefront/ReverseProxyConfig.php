<?php

namespace Symfony\Config\Storefront;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ReverseProxy'.\DIRECTORY_SEPARATOR.'PurgeAllConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ReverseProxy'.\DIRECTORY_SEPARATOR.'FastlyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ReverseProxyConfig 
{
    private $enabled;
    private $useVarnishXkey;
    private $hosts;
    private $maxParallelInvalidations;
    private $redisUrl;
    private $banMethod;
    private $banHeaders;
    private $purgeAll;
    private $fastly;
    private $_usedProperties = [];

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
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useVarnishXkey($value): self
    {
        $this->_usedProperties['useVarnishXkey'] = true;
        $this->useVarnishXkey = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->_usedProperties['hosts'] = true;
        $this->hosts = $value;

        return $this;
    }

    /**
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxParallelInvalidations($value): self
    {
        $this->_usedProperties['maxParallelInvalidations'] = true;
        $this->maxParallelInvalidations = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisUrl($value): self
    {
        $this->_usedProperties['redisUrl'] = true;
        $this->redisUrl = $value;

        return $this;
    }

    /**
     * @default 'BAN'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function banMethod($value): self
    {
        $this->_usedProperties['banMethod'] = true;
        $this->banMethod = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function banHeaders($value): self
    {
        $this->_usedProperties['banHeaders'] = true;
        $this->banHeaders = $value;

        return $this;
    }

    public function purgeAll(array $value = []): \Symfony\Config\Storefront\ReverseProxy\PurgeAllConfig
    {
        if (null === $this->purgeAll) {
            $this->_usedProperties['purgeAll'] = true;
            $this->purgeAll = new \Symfony\Config\Storefront\ReverseProxy\PurgeAllConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "purgeAll()" has already been initialized. You cannot pass values the second time you call purgeAll().');
        }

        return $this->purgeAll;
    }

    public function fastly(array $value = []): \Symfony\Config\Storefront\ReverseProxy\FastlyConfig
    {
        if (null === $this->fastly) {
            $this->_usedProperties['fastly'] = true;
            $this->fastly = new \Symfony\Config\Storefront\ReverseProxy\FastlyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fastly()" has already been initialized. You cannot pass values the second time you call fastly().');
        }

        return $this->fastly;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('use_varnish_xkey', $value)) {
            $this->_usedProperties['useVarnishXkey'] = true;
            $this->useVarnishXkey = $value['use_varnish_xkey'];
            unset($value['use_varnish_xkey']);
        }

        if (array_key_exists('hosts', $value)) {
            $this->_usedProperties['hosts'] = true;
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }

        if (array_key_exists('max_parallel_invalidations', $value)) {
            $this->_usedProperties['maxParallelInvalidations'] = true;
            $this->maxParallelInvalidations = $value['max_parallel_invalidations'];
            unset($value['max_parallel_invalidations']);
        }

        if (array_key_exists('redis_url', $value)) {
            $this->_usedProperties['redisUrl'] = true;
            $this->redisUrl = $value['redis_url'];
            unset($value['redis_url']);
        }

        if (array_key_exists('ban_method', $value)) {
            $this->_usedProperties['banMethod'] = true;
            $this->banMethod = $value['ban_method'];
            unset($value['ban_method']);
        }

        if (array_key_exists('ban_headers', $value)) {
            $this->_usedProperties['banHeaders'] = true;
            $this->banHeaders = $value['ban_headers'];
            unset($value['ban_headers']);
        }

        if (array_key_exists('purge_all', $value)) {
            $this->_usedProperties['purgeAll'] = true;
            $this->purgeAll = new \Symfony\Config\Storefront\ReverseProxy\PurgeAllConfig($value['purge_all']);
            unset($value['purge_all']);
        }

        if (array_key_exists('fastly', $value)) {
            $this->_usedProperties['fastly'] = true;
            $this->fastly = new \Symfony\Config\Storefront\ReverseProxy\FastlyConfig($value['fastly']);
            unset($value['fastly']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['useVarnishXkey'])) {
            $output['use_varnish_xkey'] = $this->useVarnishXkey;
        }
        if (isset($this->_usedProperties['hosts'])) {
            $output['hosts'] = $this->hosts;
        }
        if (isset($this->_usedProperties['maxParallelInvalidations'])) {
            $output['max_parallel_invalidations'] = $this->maxParallelInvalidations;
        }
        if (isset($this->_usedProperties['redisUrl'])) {
            $output['redis_url'] = $this->redisUrl;
        }
        if (isset($this->_usedProperties['banMethod'])) {
            $output['ban_method'] = $this->banMethod;
        }
        if (isset($this->_usedProperties['banHeaders'])) {
            $output['ban_headers'] = $this->banHeaders;
        }
        if (isset($this->_usedProperties['purgeAll'])) {
            $output['purge_all'] = $this->purgeAll->toArray();
        }
        if (isset($this->_usedProperties['fastly'])) {
            $output['fastly'] = $this->fastly->toArray();
        }

        return $output;
    }

}
