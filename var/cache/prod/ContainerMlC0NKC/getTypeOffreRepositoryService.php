<?php

<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/getTypeOffreRepositoryService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getTypeOffreRepositoryService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeOffreRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypeOffreRepository' shared autowired service.
     *
     * @return \App\Repository\TypeOffreRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeOffreRepository'] = new \App\Repository\TypeOffreRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
