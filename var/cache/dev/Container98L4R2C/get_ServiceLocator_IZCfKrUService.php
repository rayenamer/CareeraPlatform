<?php

namespace Container98L4R2C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IZCfKrUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IZCfKrU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IZCfKrU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rep' => ['privates', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\OffreRepository',
        ]);
    }
}
