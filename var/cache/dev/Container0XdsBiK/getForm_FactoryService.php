<?php

namespace Container0XdsBiK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.factory'] = new \Symfony\Component\Form\FormFactory(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')));
    }
}
