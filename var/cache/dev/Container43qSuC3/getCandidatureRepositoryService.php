<?php

namespace Container43qSuC3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatureRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Repository\CandidatureRepository' shared autowired service.
     *
     * @return \App\Repository\CandidatureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Repository\\CandidatureRepository'] = new \App\Repository\CandidatureRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
