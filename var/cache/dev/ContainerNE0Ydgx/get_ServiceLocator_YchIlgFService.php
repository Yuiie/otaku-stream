<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ychIlgF' shared service.

return $this->privates['.service_locator.ychIlgF'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('doctrine' => function () {
    return ($this->services['doctrine'] ?? $this->getDoctrineService());
}, 'form.factory' => function () {
    return ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php'));
}, 'http_kernel' => function () {
    return ($this->services['http_kernel'] ?? $this->getHttpKernelService());
}, 'parameter_bag' => function () {
    return ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this));
}, 'request_stack' => function () {
    return ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
}, 'router' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'security.authorization_checker' => function () {
    return ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
}, 'security.csrf.token_manager' => function () {
    return ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php'));
}, 'security.token_storage' => function () {
    return ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());
}, 'serializer' => function () {
    return ($this->services['serializer'] ?? $this->load('getSerializerService.php'));
}, 'session' => function () {
    return ($this->services['session'] ?? $this->load('getSessionService.php'));
}, 'templating' => function () {
    return ($this->services['templating'] ?? $this->getTemplatingService());
}, 'twig' => function () {
    return ($this->services['twig'] ?? $this->getTwigService());
}));
