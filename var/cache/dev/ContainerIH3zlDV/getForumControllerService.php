<?php

namespace ContainerIH3zlDV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ForumController' shared autowired service.
     *
     * @return \App\Controller\ForumController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ForumController'] = $instance = new \App\Controller\ForumController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ForumController', $container));

        return $instance;
    }
}
