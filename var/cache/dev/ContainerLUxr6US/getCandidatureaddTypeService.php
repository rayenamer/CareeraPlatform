<?php

namespace ContainerLUxr6US;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatureaddTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CandidatureaddType' shared autowired service.
     *
     * @return \App\Form\CandidatureaddType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CandidatureaddType'] = new \App\Form\CandidatureaddType();
    }
}
