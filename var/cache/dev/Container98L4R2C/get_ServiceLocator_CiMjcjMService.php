<?php

namespace Container98L4R2C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CiMjcjMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CiMjcjM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CiMjcjM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'candidature' => ['privates', '.errored..service_locator.CiMjcjM.App\\Entity\\Candidaturemission', NULL, 'Cannot autowire service ".service_locator.CiMjcjM": it needs an instance of "App\\Entity\\Candidaturemission" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'smsService' => ['privates', 'App\\Service\\SmsService', 'getSmsServiceService', true],
        ], [
            'candidature' => 'App\\Entity\\Candidaturemission',
            'em' => '?',
            'smsService' => 'App\\Service\\SmsService',
        ]);
    }
}
