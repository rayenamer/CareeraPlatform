<?php

namespace ContainerE2q9PZJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DhkctUmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dhkctUm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dhkctUm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'offreRepository' => ['privates', '.errored.JxtIDrG', NULL, 'Cannot determine controller argument for "App\\Controller\\OffreController::recherche()": the $offreRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\OffreRepository".'],
        ], [
            'offreRepository' => '?',
        ]);
    }
}
