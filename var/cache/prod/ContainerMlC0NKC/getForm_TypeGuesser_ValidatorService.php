<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getForm_TypeGuesser_ValidatorService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getForm_TypeGuesser_ValidatorService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_ValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($container->privates['validator'] ?? self::getValidatorService($container)));
    }
}
