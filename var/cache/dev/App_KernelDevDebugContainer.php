<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVByxf3K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVByxf3K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVByxf3K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVByxf3K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVByxf3K\App_KernelDevDebugContainer([
    'container.build_hash' => 'VByxf3K',
    'container.build_id' => '46386db9',
    'container.build_time' => 1739453972,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVByxf3K');
