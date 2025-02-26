<?php

namespace ContainerO18pRhf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ConfigReaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.config_reader' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapConfigReader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.importmap.config_reader'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapConfigReader('C:\\CareeraPlatform/importmap.php', ($container->privates['asset_mapper.importmap.remote_package_storage'] ??= new \Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage('C:\\CareeraPlatform/assets/vendor')));
    }
}
