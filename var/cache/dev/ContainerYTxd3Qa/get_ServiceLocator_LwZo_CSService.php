<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.lwZo.cS' shared service.

return $this->privates['.service_locator.lwZo.cS'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('factory' => function () {
    return ($this->services['knp_menu.factory'] ?? $this->load('getKnpMenu_FactoryService.php'));
}));
