<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getValidator_NoSuspiciousCharactersService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getValidator_NoSuspiciousCharactersService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_NoSuspiciousCharactersService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.no_suspicious_characters' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.no_suspicious_characters'] = new \Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator([]);
    }
}
