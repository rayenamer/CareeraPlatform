<?php

namespace Container43qSuC3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAlertService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Alert' service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Alert
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert'] = function ($container) {
            return new \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Alert();
        };

        return $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert']($container);
    }
}
