<?php

namespace Container1C6dr3q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploadTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType('C:\\careera');
    }
}
