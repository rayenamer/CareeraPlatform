<?php

namespace ContainerMlC0NKC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOffremodControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\OffremodController' shared autowired service.
     *
     * @return \App\Controller\OffremodController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OffremodController'] = $instance = new \App\Controller\OffremodController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\OffremodController', $container));

        return $instance;
    }
}
