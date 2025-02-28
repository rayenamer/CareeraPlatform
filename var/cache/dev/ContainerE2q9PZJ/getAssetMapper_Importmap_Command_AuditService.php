<?php

namespace ContainerE2q9PZJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_AuditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.command.audit' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapAuditCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['asset_mapper.importmap.command.audit'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapAuditCommand(new \Symfony\Component\AssetMapper\ImportMap\ImportMapAuditor(($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container))));

        $instance->setName('importmap:audit');
        $instance->setDescription('Check for security vulnerability advisories for dependencies');

        return $instance;
    }
}
