<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/get_AssetMapper_Importmap_Command_Remove_LazyService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_AssetMapper_Importmap_Command_Remove_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Remove_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.asset_mapper.importmap.command.remove.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.asset_mapper.importmap.command.remove.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:remove', [], 'Remove JavaScript packages', false, #[\Closure(name: 'asset_mapper.importmap.command.remove', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapRemoveCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapRemoveCommand => ($container->privates['asset_mapper.importmap.command.remove'] ?? $container->load('getAssetMapper_Importmap_Command_RemoveService')));
    }
}
