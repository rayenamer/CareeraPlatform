<?php

namespace ContainerE2q9PZJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JXc3k4cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jXc3k4c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jXc3k4c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', '.errored.bLbn3nb', NULL, 'Cannot determine controller argument for "App\\Controller\\TypecontratController::deletetypecontrat()": the $rep argument is type-hinted with the non-existent class or interface: "App\\Repository\\TypeContratRepository".'],
        ], [
            'm' => '?',
            'rep' => '?',
        ]);
    }
}
