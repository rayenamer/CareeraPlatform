<?php

namespace ContainerMlC0NKC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOffreRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\OffreRepository' shared autowired service.
     *
     * @return \App\Repository\OffreRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OffreRepository'] = new \App\Repository\OffreRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
