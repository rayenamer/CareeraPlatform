<?php

namespace ContainerHQS7HsS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlockedUsersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BlockedUsersController' shared autowired service.
     *
     * @return \App\Controller\BlockedUsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\BlockedUsersController'] = $instance = new \App\Controller\BlockedUsersController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\BlockedUsersController', $container));

        return $instance;
    }
}
