<?php

namespace ContainerIH3zlDV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\MessageRepository' shared autowired service.
     *
     * @return \App\Repository\MessageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MessageRepository'] = new \App\Repository\MessageRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
