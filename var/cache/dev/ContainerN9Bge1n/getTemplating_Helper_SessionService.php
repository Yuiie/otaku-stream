<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.session' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\Helper\\Helper.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\Helper\\SessionHelper.php';

return $this->privates['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));