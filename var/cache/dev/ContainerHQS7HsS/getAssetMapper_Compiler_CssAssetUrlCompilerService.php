<?php

namespace ContainerHQS7HsS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Compiler_CssAssetUrlCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.compiler.css_asset_url_compiler' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Compiler\CssAssetUrlCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.compiler.css_asset_url_compiler'] = new \Symfony\Component\AssetMapper\Compiler\CssAssetUrlCompiler('strict', ($container->privates['monolog.logger.asset_mapper'] ?? $container->load('getMonolog_Logger_AssetMapperService')));
    }
}
