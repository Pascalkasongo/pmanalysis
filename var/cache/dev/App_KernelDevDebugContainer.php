<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSiP6VqY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSiP6VqY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSiP6VqY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSiP6VqY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSiP6VqY\App_KernelDevDebugContainer([
    'container.build_hash' => 'SiP6VqY',
    'container.build_id' => '5f76cec3',
    'container.build_time' => 1725122177,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSiP6VqY');
