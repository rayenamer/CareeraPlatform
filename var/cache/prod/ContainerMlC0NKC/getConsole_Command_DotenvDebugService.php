<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getConsole_Command_DotenvDebugService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getConsole_Command_DotenvDebugService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_DotenvDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.dotenv_debug' shared service.
     *
     * @return \Symfony\Component\Dotenv\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.dotenv_debug'] = $instance = new \Symfony\Component\Dotenv\Command\DebugCommand('prod', \dirname(__DIR__, 4));

        $instance->setName('debug:dotenv');
        $instance->setDescription('List all dotenv files with variables and values');

        return $instance;
    }
}
