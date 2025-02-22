<?php

namespace ContainerOMjdY6V;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_SerializerDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.serializer_debug' shared service.
     *
     * @return \Symfony\Component\Serializer\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.serializer_debug'] = $instance = new \Symfony\Component\Serializer\Command\DebugCommand(($container->privates['serializer.mapping.class_metadata_factory'] ?? self::getSerializer_Mapping_ClassMetadataFactoryService($container)));

        $instance->setName('debug:serializer');
        $instance->setDescription('Display serialization information for classes');

        return $instance;
    }
}
