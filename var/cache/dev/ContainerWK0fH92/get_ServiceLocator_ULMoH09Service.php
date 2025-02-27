<?php

namespace ContainerWK0fH92;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ULMoH09Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uLMoH09' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uLMoH09'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'offreRepository' => ['privates', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
        ], [
            'doctrine' => '?',
            'offreRepository' => 'App\\Repository\\OffreRepository',
        ]);
    }
}
