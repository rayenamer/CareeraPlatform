<?php

namespace Container8U6hmrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeContratRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\TypeContratRepository' shared autowired service.
     *
     * @return \App\Repository\TypeContratRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeContratRepository'] = new \App\Repository\TypeContratRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
