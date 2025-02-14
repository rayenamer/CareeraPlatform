<?php

namespace ContainerR8UdAwP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService'));

        $container->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($container->privates['maker.security_config_updater'] ??= new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater()), ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService')), ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService'))), $a, ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.template_linter'] ??= new \Symfony\Bundle\MakerBundle\Util\TemplateLinter($container->getEnv('default::string:MAKER_PHP_CS_FIXER_BINARY_PATH'), $container->getEnv('default::string:MAKER_PHP_CS_FIXER_CONFIG_PATH'))));

        $instance->setName('make:user');
        $instance->setDescription('Create a new security user class');

        return $instance;
    }
}
