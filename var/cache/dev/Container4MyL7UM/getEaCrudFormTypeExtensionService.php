<?php

namespace Container4MyL7UM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEaCrudFormTypeExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)));
    }
}
