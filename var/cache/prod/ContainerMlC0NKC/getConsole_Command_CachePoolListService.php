<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getConsole_Command_CachePoolListService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getConsole_Command_CachePoolListService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolListService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getConsole_Command_CachePoolListService.php
        $container->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand(['cache.app', 'cache.system', 'cache.validator', 'cache.serializer', 'cache.annotations', 'cache.property_info', 'cache.asset_mapper', 'cache.messenger.restart_workers_signal', 'cache.validator_expression_language', 'cache.doctrine.orm.default.result', 'cache.doctrine.orm.default.query', 'cache.security_expression_language', 'cache.security_is_granted_attribute_expression_language', 'cache.webpack_encore']);
========
        $container->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand(['cache.app', 'cache.system', 'cache.validator', 'cache.serializer', 'cache.annotations', 'cache.property_info', 'cache.asset_mapper', 'cache.messenger.restart_workers_signal', 'doctrine.result_cache_pool', 'doctrine.system_cache_pool', 'cache.property_access', 'cache.validator_expression_language', 'cache.security_expression_language', 'cache.security_is_granted_attribute_expression_language']);
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getConsole_Command_CachePoolListService.php

        $instance->setName('cache:pool:list');
        $instance->setDescription('List available cache pools');

        return $instance;
    }
}
