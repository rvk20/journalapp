<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTsjxzMO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTsjxzMO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTsjxzMO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTsjxzMO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTsjxzMO\App_KernelDevDebugContainer([
    'container.build_hash' => 'TsjxzMO',
    'container.build_id' => 'e3d5b8da',
    'container.build_time' => 1648151868,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTsjxzMO');
