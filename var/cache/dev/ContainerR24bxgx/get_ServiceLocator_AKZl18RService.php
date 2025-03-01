<?php

namespace ContainerR24bxgx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AKZl18RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aKZl18R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aKZl18R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'offreRepository' => ['privates', 'App\\Repository\\MissionfreelencerRepository', 'getMissionfreelencerRepositoryService', true],
        ], [
            'offreRepository' => 'App\\Repository\\MissionfreelencerRepository',
        ]);
    }
}
