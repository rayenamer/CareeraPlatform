<?php

<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/get_Console_Command_CachePoolDelete_LazyService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_Console_Command_CachePoolDelete_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CachePoolDelete_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.cache_pool_delete.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.cache_pool_delete.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:pool:delete', [], 'Delete an item from a cache pool', false, #[\Closure(name: 'console.command.cache_pool_delete', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand => ($container->privates['console.command.cache_pool_delete'] ?? $container->load('getConsole_Command_CachePoolDeleteService')));
    }
}
