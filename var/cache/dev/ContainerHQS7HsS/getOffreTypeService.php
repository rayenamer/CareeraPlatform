<?php

namespace ContainerHQS7HsS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOffreTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\OffreType' shared autowired service.
     *
     * @return \App\Form\OffreType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\OffreType'] = new \App\Form\OffreType();
    }
}
