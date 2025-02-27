<?php

namespace ContainerWK0fH92;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TGr8Pa1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TGr8Pa1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TGr8Pa1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'doctrine' => '?',
            'security' => '?',
            'slugger' => '?',
        ]);
    }
}
