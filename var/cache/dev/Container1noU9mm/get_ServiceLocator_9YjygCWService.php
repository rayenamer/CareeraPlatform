<?php

namespace Container1noU9mm;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9YjygCWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9YjygCW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9YjygCW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'event' => ['privates', '.errored..service_locator.9YjygCW.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.9YjygCW": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'event' => 'App\\Entity\\Evenement',
        ]);
    }
}
