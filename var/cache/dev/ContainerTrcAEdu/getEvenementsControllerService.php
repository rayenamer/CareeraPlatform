<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EvenementsController' shared autowired service.
     *
     * @return \App\Controller\EvenementsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\EvenementsController'] = $instance = new \App\Controller\EvenementsController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\EvenementsController', $container));

        return $instance;
    }
}
