<?php

namespace Container2yuIunM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WmXC7oJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wmXC7oJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wmXC7oJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'candidaturemissionRepository' => ['privates', '.errored.wchyjDp', NULL, 'Cannot determine controller argument for "App\\Controller\\CandidaturemissionController::consulterCandidatures()": the $candidaturemissionRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\CandidaturemissionRepository". Did you forget to add a use statement?'],
        ], [
            'candidaturemissionRepository' => '?',
        ]);
    }
}
