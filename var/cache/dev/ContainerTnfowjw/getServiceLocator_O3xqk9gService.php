<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.o3xqk9g' shared service.

return $this->services['service_locator.o3xqk9g'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('doctrine' => function () {
    return ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'};
}, 'session' => function () {
    return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'};
}));
