<?php

namespace Container43qSuC3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatureTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Form\CandidatureType' shared autowired service.
     *
     * @return \App\Form\CandidatureType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Form\\CandidatureType'] = new \App\Form\CandidatureType();
    }
}
