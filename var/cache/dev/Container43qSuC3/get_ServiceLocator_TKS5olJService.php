<?php

namespace Container43qSuC3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TKS5olJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tKS5olJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tKS5olJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenement' => ['privates', '.errored..service_locator.tKS5olJ.App\\Entity\\TypeEvent', NULL, 'Cannot autowire service ".service_locator.tKS5olJ": it needs an instance of "App\\Entity\\TypeEvent" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'evenement' => 'App\\Entity\\TypeEvent',
        ]);
    }
}
