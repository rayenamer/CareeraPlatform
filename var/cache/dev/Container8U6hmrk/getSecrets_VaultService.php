<?php

namespace Container8U6hmrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_VaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault('C:\\CareeraPlatform/config/secrets/'.$container->getEnv('string:default:kernel.environment:APP_RUNTIME_ENV'), \Symfony\Component\String\LazyString::fromCallable(($container->privates['container.getenv'] ?? $container->load('getContainer_GetenvService')), 'base64:default::SYMFONY_DECRYPTION_SECRET'));
    }
}
