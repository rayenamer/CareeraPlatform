<?php

namespace ContainerIH3zlDV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_ExceptionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'webpack_encore.exception_listener' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['webpack_encore.exception_listener'] = new \Symfony\WebpackEncoreBundle\EventListener\ExceptionListener(($container->privates['webpack_encore.entrypoint_lookup_collection'] ?? self::getWebpackEncore_EntrypointLookupCollectionService($container)), ['_default']);
    }
}
