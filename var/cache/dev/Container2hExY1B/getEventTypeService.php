<?php

namespace Container2hExY1B;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EventType' shared autowired service.
     *
     * @return \App\Form\EventType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EventType'] = new \App\Form\EventType();
    }
}
