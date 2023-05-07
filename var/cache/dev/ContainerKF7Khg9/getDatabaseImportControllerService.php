<?php

namespace ContainerKF7Khg9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDatabaseImportControllerService extends Shopware_Core_Installer_InstallerKernelDevDebugContainer
{
    /**
     * Gets the public 'Shopware\Core\Installer\Controller\DatabaseImportController' shared service.
     *
     * @return \Shopware\Core\Installer\Controller\DatabaseImportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Controller/InstallerController.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Controller/DatabaseImportController.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Database/DatabaseMigrator.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Installer/Database/MigrationCollectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Maintenance/System/Service/DatabaseConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Maintenance/System/Service/SetupDatabaseAdapter.php';

        $container->services['Shopware\\Core\\Installer\\Controller\\DatabaseImportController'] = $instance = new \Shopware\Core\Installer\Controller\DatabaseImportController(($container->privates['Shopware\\Core\\Maintenance\\System\\Service\\DatabaseConnectionFactory'] ?? ($container->privates['Shopware\\Core\\Maintenance\\System\\Service\\DatabaseConnectionFactory'] = new \Shopware\Core\Maintenance\System\Service\DatabaseConnectionFactory())), new \Shopware\Core\Installer\Database\DatabaseMigrator(($container->privates['Shopware\\Core\\Maintenance\\System\\Service\\SetupDatabaseAdapter'] ?? ($container->privates['Shopware\\Core\\Maintenance\\System\\Service\\SetupDatabaseAdapter'] = new \Shopware\Core\Maintenance\System\Service\SetupDatabaseAdapter())), new \Shopware\Core\Installer\Database\MigrationCollectionFactory(\dirname(__DIR__, 4)), '6.4.20.1'));

        $instance->setContainer($container);

        return $instance;
    }
}