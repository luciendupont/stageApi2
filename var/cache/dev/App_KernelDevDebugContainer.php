<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHDmXS1Q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHDmXS1Q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHDmXS1Q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHDmXS1Q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHDmXS1Q\App_KernelDevDebugContainer([
    'container.build_hash' => 'HDmXS1Q',
    'container.build_id' => '83678246',
    'container.build_time' => 1709563060,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHDmXS1Q');
