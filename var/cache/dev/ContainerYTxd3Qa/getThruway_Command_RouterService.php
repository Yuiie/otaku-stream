<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'thruway.command.router' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\voryx\\thruway-bundle\\src\\Voryx\\ThruwayBundle\\Command\\ThruwayRouterCommand.php';

$this->services['thruway.command.router'] = $instance = new \Voryx\ThruwayBundle\Command\ThruwayRouterCommand();

$instance->setLogger(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
$instance->setName('thruway:router:start');

return $instance;
