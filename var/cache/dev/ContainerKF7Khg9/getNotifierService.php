<?php

namespace ContainerKF7Khg9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifierService extends Shopware_Core_Installer_InstallerKernelDevDebugContainer
{
    /**
     * Gets the private 'Shopware\Core\Installer\Finish\Notifier' shared service.
     *
     * @return \Shopware\Core\Installer\Finish\Notifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Finish/Notifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Finish/UniqueIdGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';

        return $container->privates['Shopware\\Core\\Installer\\Finish\\Notifier'] = new \Shopware\Core\Installer\Finish\Notifier('https://api.shopware.com', ($container->privates['Shopware\\Core\\Installer\\Finish\\UniqueIdGenerator'] ?? ($container->privates['Shopware\\Core\\Installer\\Finish\\UniqueIdGenerator'] = new \Shopware\Core\Installer\Finish\UniqueIdGenerator(\dirname(__DIR__, 4)))), ($container->privates['GuzzleHttp\\Client'] ?? ($container->privates['GuzzleHttp\\Client'] = new \GuzzleHttp\Client())), '6.4.20.1');
    }
}