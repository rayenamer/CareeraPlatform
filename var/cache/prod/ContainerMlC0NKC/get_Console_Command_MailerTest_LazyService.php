<?php

<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/get_Console_Command_MailerTest_LazyService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_Console_Command_MailerTest_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MailerTest_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.mailer_test.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.mailer_test.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('mailer:test', [], 'Test Mailer transports by sending an email', false, #[\Closure(name: 'console.command.mailer_test', class: 'Symfony\\Component\\Mailer\\Command\\MailerTestCommand')] fn (): \Symfony\Component\Mailer\Command\MailerTestCommand => ($container->privates['console.command.mailer_test'] ?? $container->load('getConsole_Command_MailerTestService')));
    }
}
