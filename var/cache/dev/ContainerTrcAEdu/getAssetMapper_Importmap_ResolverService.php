<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.resolver' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\Resolver\JsDelivrEsmResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.importmap.resolver'] = new \Symfony\Component\AssetMapper\ImportMap\Resolver\JsDelivrEsmResolver(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));
    }
}
