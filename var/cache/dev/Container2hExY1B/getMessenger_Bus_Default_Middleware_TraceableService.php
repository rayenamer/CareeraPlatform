<?php

namespace Container2hExY1B;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Default_Middleware_TraceableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.bus.default.middleware.traceable' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\TraceableMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.bus.default.middleware.traceable'] = new \Symfony\Component\Messenger\Middleware\TraceableMiddleware(($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), 'messenger.bus.default');
    }
}
