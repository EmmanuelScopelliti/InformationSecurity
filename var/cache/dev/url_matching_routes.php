<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/installer/database-configuration' => [[['_route' => 'installer.database-configuration', '_controller' => 'Shopware\\Core\\Installer\\Controller\\DatabaseConfigurationController::databaseConfiguration'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/installer/database-information' => [[['_route' => 'installer.database-information', '_controller' => 'Shopware\\Core\\Installer\\Controller\\DatabaseConfigurationController::databaseInformation'], null, ['POST' => 0], null, false, false, null]],
        '/installer/database-import' => [[['_route' => 'installer.database-import', '_controller' => 'Shopware\\Core\\Installer\\Controller\\DatabaseImportController::databaseImport'], null, ['GET' => 0], null, false, false, null]],
        '/installer/database-migrate' => [[['_route' => 'installer.database-migrate', '_controller' => 'Shopware\\Core\\Installer\\Controller\\DatabaseImportController::databaseMigrate'], null, ['POST' => 0], null, false, false, null]],
        '/installer/finish' => [[['_route' => 'installer.finish', '_controller' => 'Shopware\\Core\\Installer\\Controller\\FinishController::finish'], null, ['GET' => 0], null, false, false, null]],
        '/installer/license' => [[['_route' => 'installer.license', '_controller' => 'Shopware\\Core\\Installer\\Controller\\LicenseController::license'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installer/requirements' => [[['_route' => 'installer.requirements', '_controller' => 'Shopware\\Core\\Installer\\Controller\\RequirementsController::requirements'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installer' => [[['_route' => 'installer.language-selection', '_controller' => 'Shopware\\Core\\Installer\\Controller\\SelectLanguagesController::languageSelection'], null, ['GET' => 0], null, false, false, null]],
        '/installer/configuration' => [[['_route' => 'installer.configuration', '_controller' => 'Shopware\\Core\\Installer\\Controller\\ShopConfigurationController::shopConfiguration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
