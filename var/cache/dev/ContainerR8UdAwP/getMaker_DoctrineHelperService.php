<?php

namespace ContainerR8UdAwP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_DoctrineHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.doctrine_helper' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($container->services['doctrine'] ?? self::getDoctrineService($container)), ['default' => [['App\\Entity', ($container->privates['doctrine.orm.default_attribute_metadata_driver'] ??= new \Doctrine\ORM\Mapping\Driver\AttributeDriver(['C:\\careera\\src\\Entity'], true))]]]);
    }
}
