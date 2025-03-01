<?php

namespace ContainerJ2098To;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q2iQt7wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q2iQt7w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q2iQt7w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', 'App\\Repository\\TypeContratRepository', 'getTypeContratRepositoryService', true],
        ], [
            'm' => '?',
            'rep' => 'App\\Repository\\TypeContratRepository',
        ]);
    }
}
