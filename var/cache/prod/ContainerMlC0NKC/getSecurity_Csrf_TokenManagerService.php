<?php

<<<<<<<< HEAD:var/cache/prod/ContainerMlC0NKC/getSecurity_Csrf_TokenManagerService.php
<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/getSecurity_Csrf_TokenManagerService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getSecurity_Csrf_TokenManagerService.php
========
namespace Container98L4R2C;
>>>>>>>> origin/MainTestWiem:var/cache/dev/Container98L4R2C/getSecurity_Csrf_TokenManagerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Csrf_TokenManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'UriSafeTokenGenerator.php';

        return $container->privates['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($container->privates['security.csrf.token_storage'] ?? $container->load('getSecurity_Csrf_TokenStorageService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
