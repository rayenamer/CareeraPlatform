<?php

namespace ContainerFbC0vUQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WVw5UphService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wVw5Uph' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wVw5Uph'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'discussionRepository' => ['privates', 'App\\Repository\\DiscussionRepository', 'getDiscussionRepositoryService', true],
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'replyRepository' => ['privates', 'App\\Repository\\ReplyRepository', 'getReplyRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'discussionRepository' => 'App\\Repository\\DiscussionRepository',
            'm' => '?',
            'replyRepository' => 'App\\Repository\\ReplyRepository',
            'security' => '?',
        ]);
    }
}
