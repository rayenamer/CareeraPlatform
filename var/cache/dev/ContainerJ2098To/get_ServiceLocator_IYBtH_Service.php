<?php

namespace ContainerJ2098To;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IYBtH_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._IYBtH.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._IYBtH.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', 'App\\Repository\\TypeOffreRepository', 'getTypeOffreRepositoryService', true],
        ], [
            'm' => '?',
            'rep' => 'App\\Repository\\TypeOffreRepository',
        ]);
    }
}
