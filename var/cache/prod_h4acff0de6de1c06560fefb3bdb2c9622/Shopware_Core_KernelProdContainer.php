<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHr3qLp9\Shopware_Core_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHr3qLp9/Shopware_Core_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHr3qLp9.legacy');

    return;
}

if (!\class_exists(Shopware_Core_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHr3qLp9\Shopware_Core_KernelProdContainer::class, Shopware_Core_KernelProdContainer::class, false);
}

return new \ContainerHr3qLp9\Shopware_Core_KernelProdContainer([
    'container.build_hash' => 'Hr3qLp9',
    'container.build_id' => '17692a27',
    'container.build_time' => 1683033069,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHr3qLp9');