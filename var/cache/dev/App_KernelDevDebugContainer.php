<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9jWrJU4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9jWrJU4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9jWrJU4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9jWrJU4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9jWrJU4\App_KernelDevDebugContainer([
    'container.build_hash' => '9jWrJU4',
    'container.build_id' => '9c67f692',
    'container.build_time' => 1725528059,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9jWrJU4');
