<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container53Bylla\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container53Bylla/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container53Bylla.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container53Bylla\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container53Bylla\srcDevDebugProjectContainer(array(
    'container.build_hash' => '53Bylla',
    'container.build_id' => '5c5a40f5',
    'container.build_time' => 1538667409,
), __DIR__.\DIRECTORY_SEPARATOR.'Container53Bylla');
