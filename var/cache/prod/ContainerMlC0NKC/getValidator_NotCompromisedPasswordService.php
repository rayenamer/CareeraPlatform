<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getValidator_NotCompromisedPasswordService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getValidator_NotCompromisedPasswordService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_NotCompromisedPasswordService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')), 'UTF-8', true, NULL);
    }
}
