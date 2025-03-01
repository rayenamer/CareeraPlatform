<?php

namespace ContainerXHRYnxW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I395fV8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I395fV8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I395fV8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rep' => ['privates', 'App\\Repository\\CandidatureRepository', 'getCandidatureRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'rep' => 'App\\Repository\\CandidatureRepository',
            'security' => '?',
        ]);
    }
}
