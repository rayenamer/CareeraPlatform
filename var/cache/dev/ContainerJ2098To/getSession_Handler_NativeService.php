<?php

namespace ContainerJ2098To;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Handler_NativeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.handler.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['session.handler.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \SessionHandler());
    }
}
