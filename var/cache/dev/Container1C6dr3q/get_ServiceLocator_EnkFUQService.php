<?php

namespace Container1C6dr3q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EnkFUQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.enkFUQ_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.enkFUQ_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'offre' => ['privates', '.errored..service_locator.enkFUQ_.App\\Entity\\Missionfreelencer', NULL, 'Cannot autowire service ".service_locator.enkFUQ_": it needs an instance of "App\\Entity\\Missionfreelencer" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'offre' => 'App\\Entity\\Missionfreelencer',
        ]);
    }
}
