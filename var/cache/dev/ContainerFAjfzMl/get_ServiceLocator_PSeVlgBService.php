<?php

namespace ContainerFAjfzMl;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PSeVlgBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PSeVlgB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PSeVlgB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'candidature' => ['privates', '.errored..service_locator.PSeVlgB.App\\Entity\\Candidaturemission', NULL, 'Cannot autowire service ".service_locator.PSeVlgB": it needs an instance of "App\\Entity\\Candidaturemission" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'candidature' => 'App\\Entity\\Candidaturemission',
            'em' => '?',
        ]);
    }
}
