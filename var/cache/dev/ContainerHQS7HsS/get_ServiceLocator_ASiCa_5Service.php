<?php

namespace ContainerHQS7HsS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ASiCa_5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ASiCa.5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ASiCa.5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'offreMissionRepository' => ['privates', '.errored.Oql2goT', NULL, 'Cannot determine controller argument for "App\\Controller\\MissionfreelencerController::searchByCategory()": the $offreMissionRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\OffreMissionRepository". Did you forget to add a use statement?'],
        ], [
            'offreMissionRepository' => '?',
        ]);
    }
}
