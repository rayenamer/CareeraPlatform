<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXc3GBB8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXc3GBB8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXc3GBB8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXc3GBB8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXc3GBB8\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xc3GBB8',
    'container.build_id' => '820065ec',
    'container.build_time' => 1740486305,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXc3GBB8');
