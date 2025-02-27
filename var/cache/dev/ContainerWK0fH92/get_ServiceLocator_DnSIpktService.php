<?php

namespace ContainerWK0fH92;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DnSIpktService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dnSIpkt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dnSIpkt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'discussionRepository' => ['privates', 'App\\Repository\\DiscussionRepository', 'getDiscussionRepositoryService', true],
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'discussionRepository' => 'App\\Repository\\DiscussionRepository',
            'm' => '?',
        ]);
    }
}
