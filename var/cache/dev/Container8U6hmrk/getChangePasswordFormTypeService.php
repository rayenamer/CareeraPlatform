<?php

namespace Container8U6hmrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangePasswordFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ChangePasswordFormType' shared autowired service.
     *
     * @return \App\Form\ChangePasswordFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ChangePasswordFormType'] = new \App\Form\ChangePasswordFormType();
    }
}
