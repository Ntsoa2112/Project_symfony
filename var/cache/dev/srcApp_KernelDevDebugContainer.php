<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXR5QjTO\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXR5QjTO/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXR5QjTO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXR5QjTO\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXR5QjTO\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XR5QjTO',
    'container.build_id' => '53101edf',
    'container.build_time' => 1572962195,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXR5QjTO');
