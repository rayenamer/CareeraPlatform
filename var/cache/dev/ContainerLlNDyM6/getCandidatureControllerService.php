<?php

namespace ContainerLlNDyM6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatureControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CandidatureController' shared autowired service.
     *
     * @return \App\Controller\CandidatureController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CandidatureController'] = $instance = new \App\Controller\CandidatureController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\CandidatureController', $container));

        return $instance;
    }
}
