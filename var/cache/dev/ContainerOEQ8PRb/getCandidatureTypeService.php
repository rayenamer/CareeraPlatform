<?php

namespace ContainerOEQ8PRb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatureTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CandidatureType' shared autowired service.
     *
     * @return \App\Form\CandidatureType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CandidatureType'] = new \App\Form\CandidatureType();
    }
}
