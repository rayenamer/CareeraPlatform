<?php

namespace ContainerA7AHSK2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9oQ0dhjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9oQ0dhj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9oQ0dhj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rep' => ['privates', 'App\\Repository\\TypeContratRepository', 'getTypeContratRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\TypeContratRepository',
        ]);
    }
}
