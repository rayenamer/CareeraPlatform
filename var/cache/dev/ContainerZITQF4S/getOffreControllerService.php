<?php

namespace ContainerZITQF4S;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOffreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OffreController' shared autowired service.
     *
     * @return \App\Controller\OffreController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OffreController'] = $instance = new \App\Controller\OffreController(($container->services['translator'] ?? self::getTranslatorService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\OffreController', $container));

        return $instance;
    }
}
