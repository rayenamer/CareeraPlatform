<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/get_Console_Command_DebugAutowiring_LazyService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_Console_Command_DebugAutowiring_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_DebugAutowiring_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.debug_autowiring.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.debug_autowiring.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:autowiring', [], 'List classes/interfaces you can use for autowiring', false, #[\Closure(name: 'console.command.debug_autowiring', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand => ($container->privates['console.command.debug_autowiring'] ?? $container->load('getConsole_Command_DebugAutowiringService')));
    }
}
