<?php

<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/getSecurity_Listener_PasswordMigratingService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getSecurity_Listener_PasswordMigratingService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_PasswordMigratingService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.password_migrating' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.password_migrating'] = new \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
