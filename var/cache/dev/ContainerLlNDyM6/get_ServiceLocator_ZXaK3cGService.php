<?php

namespace ContainerLlNDyM6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZXaK3cGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZXaK3cG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZXaK3cG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rep' => ['privates', 'App\\Repository\\CandidatureRepository', 'getCandidatureRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\CandidatureRepository',
        ]);
    }
}
