<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeEventaddTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Form\TypeEventaddType' shared autowired service.
     *
     * @return \App\Form\TypeEventaddType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Form\\TypeEventaddType'] = new \App\Form\TypeEventaddType();
    }
}
