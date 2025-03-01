<?php

namespace ContainerJ2098To;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NotificationController' shared autowired service.
     *
     * @return \App\Controller\NotificationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\NotificationController'] = $instance = new \App\Controller\NotificationController(($container->services['doctrine'] ?? self::getDoctrineService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\NotificationController', $container));

        return $instance;
    }
}
