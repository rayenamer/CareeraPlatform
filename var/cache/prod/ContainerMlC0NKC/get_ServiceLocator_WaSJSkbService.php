<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/get_ServiceLocator_VG5ADf1Service.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_ServiceLocator_WaSJSkbService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/get_ServiceLocator_VG5ADf1Service.php
class get_ServiceLocator_VG5ADf1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vG5ADf1' shared service.
========
class get_ServiceLocator_WaSJSkbService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.WaSJSkb' shared service.
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_ServiceLocator_WaSJSkbService.php
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vG5ADf1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'm' => ['services', 'doctrine', 'getDoctrineService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'm' => '?',
            'security' => '?',
        ]);
    }
}
