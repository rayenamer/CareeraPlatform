<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getDoctrine_CacheClearQueryCacheCommandService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getDoctrine_CacheClearQueryCacheCommandService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_CacheClearQueryCacheCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }
}
