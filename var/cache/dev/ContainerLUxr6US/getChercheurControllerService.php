<?php

namespace ContainerLUxr6US;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChercheurControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ChercheurController' shared autowired service.
     *
     * @return \App\Controller\ChercheurController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ChercheurController'] = $instance = new \App\Controller\ChercheurController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ChercheurController', $container));

        return $instance;
    }
}
