<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/get_ServiceLocator_O6sN0hZService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_ServiceLocator_O6sN0hZService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O6sN0hZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.o6sN0hZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o6sN0hZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'doctrine' => '?',
        ]);
    }
}
