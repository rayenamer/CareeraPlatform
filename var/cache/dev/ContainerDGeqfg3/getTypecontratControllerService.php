<?php

namespace ContainerDGeqfg3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypecontratControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TypecontratController' shared autowired service.
     *
     * @return \App\Controller\TypecontratController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\TypecontratController'] = $instance = new \App\Controller\TypecontratController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\TypecontratController', $container));

        return $instance;
    }
}
