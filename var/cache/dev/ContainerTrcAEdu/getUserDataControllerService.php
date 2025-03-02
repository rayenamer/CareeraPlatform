<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserDataControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserDataController' shared autowired service.
     *
     * @return \App\Controller\UserDataController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\UserDataController'] = $instance = new \App\Controller\UserDataController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\UserDataController', $container));

        return $instance;
    }
}
