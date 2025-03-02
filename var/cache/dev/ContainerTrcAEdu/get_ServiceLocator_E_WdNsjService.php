<?php

namespace ContainerTrcAEdu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E_WdNsjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e.WdNsj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e.WdNsj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'offreRepository' => ['services', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'offreRepository' => 'App\\Repository\\OffreRepository',
            'security' => '?',
        ]);
    }
}
