<?php

namespace Container2hExY1B;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QP5LwVYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qP5LwVY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qP5LwVY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rep' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
