<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/get_Messenger_HandlerDescriptor_QXXNQ9dService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_Messenger_HandlerDescriptor_QXXNQ9dService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_QXXNQ9dService extends App_KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.QXXNQ9d' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.QXXNQ9d'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Process\Messenger\RunProcessMessageHandler(), []);
    }
}
