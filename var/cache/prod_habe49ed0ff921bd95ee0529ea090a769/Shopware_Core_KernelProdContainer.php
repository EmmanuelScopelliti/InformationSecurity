<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGsbauL0\Shopware_Core_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGsbauL0/Shopware_Core_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerGsbauL0.legacy');

    return;
}

if (!\class_exists(Shopware_Core_KernelProdContainer::class, false)) {
    \class_alias(\ContainerGsbauL0\Shopware_Core_KernelProdContainer::class, Shopware_Core_KernelProdContainer::class, false);
}

return new \ContainerGsbauL0\Shopware_Core_KernelProdContainer([
    'container.build_hash' => 'GsbauL0',
    'container.build_id' => '2f90d41d',
    'container.build_time' => 1683032762,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGsbauL0');
