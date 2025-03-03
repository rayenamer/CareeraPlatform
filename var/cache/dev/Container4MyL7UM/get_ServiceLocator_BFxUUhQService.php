<?php

namespace Container4MyL7UM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BFxUUhQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bFxUUhQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bFxUUhQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'demandeMissionRepository' => ['privates', 'App\\Repository\\DemandeMissionRepository', 'getDemandeMissionRepositoryService', true],
        ], [
            'demandeMissionRepository' => 'App\\Repository\\DemandeMissionRepository',
        ]);
    }
}
