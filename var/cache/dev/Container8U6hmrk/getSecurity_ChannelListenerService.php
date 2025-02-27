<?php

namespace Container8U6hmrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ChannelListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['router.request_context'] ?? self::getRouter_RequestContextService($container));

        return $container->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($container->privates['security.access_map'] ??= new \Symfony\Component\Security\Http\AccessMap()), ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), $a->getHttpPort(), $a->getHttpsPort());
    }
}
