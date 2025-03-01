<?php

namespace ContainerLUxr6US;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U7w2iHvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u7w2iHv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u7w2iHv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'repDiscussion' => ['privates', 'App\\Repository\\DiscussionRepository', 'getDiscussionRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'm' => '?',
            'repDiscussion' => 'App\\Repository\\DiscussionRepository',
            'security' => '?',
        ]);
    }
}
