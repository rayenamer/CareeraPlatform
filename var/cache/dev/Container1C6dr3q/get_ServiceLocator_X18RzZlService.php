<?php

namespace Container1C6dr3q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X18RzZlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x18RzZl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x18RzZl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', 'App\\Repository\\CandidatureRepository', 'getCandidatureRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'm' => '?',
            'rep' => 'App\\Repository\\CandidatureRepository',
            'security' => '?',
        ]);
    }
}
