<?php

namespace Container4MyL7UM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDemandeMissionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DemandeMissionController' shared autowired service.
     *
     * @return \App\Controller\DemandeMissionController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DemandeMissionController'] = $instance = new \App\Controller\DemandeMissionController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\DemandeMissionController', $container));

        return $instance;
    }
}
