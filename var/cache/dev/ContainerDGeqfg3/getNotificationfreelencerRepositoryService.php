<?php

namespace ContainerDGeqfg3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationfreelencerRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\NotificationfreelencerRepository' shared autowired service.
     *
     * @return \App\Repository\NotificationfreelencerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\NotificationfreelencerRepository'] = new \App\Repository\NotificationfreelencerRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
