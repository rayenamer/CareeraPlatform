<?php

namespace ContainerXLGNXZw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XW26NerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xW26Ner' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xW26Ner'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'discussionRepository' => ['privates', 'App\\Repository\\DiscussionRepository', 'getDiscussionRepositoryService', true],
        ], [
            'discussionRepository' => 'App\\Repository\\DiscussionRepository',
        ]);
    }
}
