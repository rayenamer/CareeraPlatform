<?php

namespace ContainerHQS7HsS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidaturemissionRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CandidaturemissionRepository' shared autowired service.
     *
     * @return \App\Repository\CandidaturemissionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CandidaturemissionRepository'] = new \App\Repository\CandidaturemissionRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
