<?php

namespace ContainerLUxr6US;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumDetailsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ForumDetailsController' shared autowired service.
     *
     * @return \App\Controller\ForumDetailsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ForumDetailsController'] = $instance = new \App\Controller\ForumDetailsController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ForumDetailsController', $container));

        return $instance;
    }
}
