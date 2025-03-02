<?php

namespace ContainerDGeqfg3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4sSyY0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4s_SyY0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4s_SyY0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'replyRepository' => ['privates', 'App\\Repository\\ReplyRepository', 'getReplyRepositoryService', true],
        ], [
            'replyRepository' => 'App\\Repository\\ReplyRepository',
        ]);
    }
}
