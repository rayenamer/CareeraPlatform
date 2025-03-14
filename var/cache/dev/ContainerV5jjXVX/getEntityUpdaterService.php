<?php

namespace ContainerV5jjXVX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), $a);
    }
}
