<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DD6jg49Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dD6jg49' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dD6jg49'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'discussionRepository' => ['services', 'App\\Repository\\DiscussionRepository', 'getDiscussionRepositoryService', true],
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'discussionRepository' => 'App\\Repository\\DiscussionRepository',
            'm' => '?',
            'security' => '?',
        ]);
    }
}
