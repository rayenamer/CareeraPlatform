<?php

namespace Container43qSuC3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Command_DebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.command.debug' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['asset_mapper.command.debug'] = $instance = new \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.repository'] ?? self::getAssetMapper_RepositoryService($container)), 'C:\\careera');

        $instance->setName('debug:asset-map');
        $instance->setDescription('Output all mapped assets');

        return $instance;
    }
}
