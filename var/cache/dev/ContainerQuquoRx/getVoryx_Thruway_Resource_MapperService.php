<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'voryx.thruway.resource.mapper' shared service.

include_once $this->targetDirs[3].'\\vendor\\voryx\\thruway-bundle\\src\\Voryx\\ThruwayBundle\\ResourceMapper.php';

return $this->services['voryx.thruway.resource.mapper'] = new \Voryx\ThruwayBundle\ResourceMapper(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
