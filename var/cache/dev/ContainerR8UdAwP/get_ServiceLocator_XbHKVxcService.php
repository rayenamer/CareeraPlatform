<?php

namespace ContainerR8UdAwP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XbHKVxcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XbHKVxc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XbHKVxc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\OffreController::index' => ['privates', '.service_locator.IZCfKrU', 'get_ServiceLocator_IZCfKrUService', true],
            'App\\Controller\\OffreController::postuler' => ['privates', '.service_locator.kjLqtAK', 'get_ServiceLocator_KjLqtAKService', true],
            'App\\Controller\\OffremodController::ajoutoffre' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\OffremodController::index' => ['privates', '.service_locator.6rq4nL7', 'get_ServiceLocator_6rq4nL7Service', true],
            'App\\Controller\\OffremodController::modifoffre' => ['privates', '.service_locator.WaSJSkb', 'get_ServiceLocator_WaSJSkbService', true],
            'App\\Controller\\OffremodController::supprimeroffre' => ['privates', '.service_locator.WaSJSkb', 'get_ServiceLocator_WaSJSkbService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\OffreController:index' => ['privates', '.service_locator.IZCfKrU', 'get_ServiceLocator_IZCfKrUService', true],
            'App\\Controller\\OffreController:postuler' => ['privates', '.service_locator.kjLqtAK', 'get_ServiceLocator_KjLqtAKService', true],
            'App\\Controller\\OffremodController:ajoutoffre' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\OffremodController:index' => ['privates', '.service_locator.6rq4nL7', 'get_ServiceLocator_6rq4nL7Service', true],
            'App\\Controller\\OffremodController:modifoffre' => ['privates', '.service_locator.WaSJSkb', 'get_ServiceLocator_WaSJSkbService', true],
            'App\\Controller\\OffremodController:supprimeroffre' => ['privates', '.service_locator.WaSJSkb', 'get_ServiceLocator_WaSJSkbService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\OffreController::index' => '?',
            'App\\Controller\\OffreController::postuler' => '?',
            'App\\Controller\\OffremodController::ajoutoffre' => '?',
            'App\\Controller\\OffremodController::index' => '?',
            'App\\Controller\\OffremodController::modifoffre' => '?',
            'App\\Controller\\OffremodController::supprimeroffre' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\OffreController:index' => '?',
            'App\\Controller\\OffreController:postuler' => '?',
            'App\\Controller\\OffremodController:ajoutoffre' => '?',
            'App\\Controller\\OffremodController:index' => '?',
            'App\\Controller\\OffremodController:modifoffre' => '?',
            'App\\Controller\\OffremodController:supprimeroffre' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
