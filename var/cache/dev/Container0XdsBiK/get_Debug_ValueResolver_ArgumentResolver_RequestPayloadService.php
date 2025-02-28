<?php

namespace Container0XdsBiK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.debug.value_resolver.argument_resolver.request_payload' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['argument_resolver.request_payload'] ?? self::getArgumentResolver_RequestPayloadService($container));

        if (isset($container->privates['.debug.value_resolver.argument_resolver.request_payload'])) {
            return $container->privates['.debug.value_resolver.argument_resolver.request_payload'];
        }

        return $container->privates['.debug.value_resolver.argument_resolver.request_payload'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver($a, ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
