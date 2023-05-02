<?php

namespace ContainerKF7Khg9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequirementsControllerService extends Shopware_Core_Installer_InstallerKernelDevDebugContainer
{
    /**
     * Gets the public 'Shopware\Core\Installer\Controller\RequirementsController' shared service.
     *
     * @return \Shopware\Core\Installer\Controller\RequirementsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Controller/InstallerController.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Controller/RequirementsController.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Maintenance/System/Service/JwtCertificateGenerator.php';

        $container->services['Shopware\\Core\\Installer\\Controller\\RequirementsController'] = $instance = new \Shopware\Core\Installer\Controller\RequirementsController(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['Shopware\\Core\\Installer\\Requirements\\EnvironmentRequirementsValidator'] ?? $container->load('getEnvironmentRequirementsValidatorService'));
            yield 1 => ($container->privates['Shopware\\Core\\Installer\\Requirements\\FilesystemRequirementsValidator'] ?? ($container->privates['Shopware\\Core\\Installer\\Requirements\\FilesystemRequirementsValidator'] = new \Shopware\Core\Installer\Requirements\FilesystemRequirementsValidator(\dirname(__DIR__, 4))));
            yield 2 => ($container->privates['Shopware\\Core\\Installer\\Requirements\\ConfigurationRequirementsValidator'] ?? $container->load('getConfigurationRequirementsValidatorService'));
        }, 3), ($container->privates['Shopware\\Core\\Maintenance\\System\\Service\\JwtCertificateGenerator'] ?? ($container->privates['Shopware\\Core\\Maintenance\\System\\Service\\JwtCertificateGenerator'] = new \Shopware\Core\Maintenance\System\Service\JwtCertificateGenerator())), \dirname(__DIR__, 4));

        $instance->setContainer($container);

        return $instance;
    }
}
