<?php

namespace ContainerE2q9PZJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Enn8mSyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.enn8mSy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.enn8mSy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', '.errored.ynG0gmF', NULL, 'Cannot determine controller argument for "App\\Controller\\TypeoffreController::updatetypeoffre()": the $rep argument is type-hinted with the non-existent class or interface: "App\\Repository\\TypeOffreRepository".'],
        ], [
            'm' => '?',
            'rep' => '?',
        ]);
    }
}
