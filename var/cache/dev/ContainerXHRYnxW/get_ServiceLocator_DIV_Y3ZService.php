<?php

namespace ContainerXHRYnxW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DIV_Y3ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dIV.Y3Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dIV.Y3Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'MissionfreelencerRepository' => ['privates', 'App\\Repository\\MissionfreelencerRepository', 'getMissionfreelencerRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'MissionfreelencerRepository' => 'App\\Repository\\MissionfreelencerRepository',
            'security' => '?',
        ]);
    }
}
