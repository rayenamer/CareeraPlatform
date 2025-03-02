<?php

namespace ContainerDGeqfg3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeEventRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\TypeEventRepository' shared autowired service.
     *
     * @return \App\Repository\TypeEventRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeEventRepository'] = new \App\Repository\TypeEventRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
