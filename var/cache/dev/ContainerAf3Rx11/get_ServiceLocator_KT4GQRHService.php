<?php

namespace ContainerAf3Rx11;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KT4GQRHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kT4GQRH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kT4GQRH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'security' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
