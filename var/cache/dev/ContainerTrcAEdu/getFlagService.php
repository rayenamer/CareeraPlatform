<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFlagService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Flag' service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Flag
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag'] = function ($container) {
            return new \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Flag();
        };

        return $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag']($container);
    }
}
