<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIM6RhpK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIM6RhpK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIM6RhpK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIM6RhpK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIM6RhpK\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IM6RhpK',
    'container.build_id' => '4458cfbd',
    'container.build_time' => 1563138750,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIM6RhpK');
