<?php

namespace ContainerLUxr6US;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NativeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.native' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NativeTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.transport_factory.native'])) {
            return $container->privates['mailer.transport_factory.native'];
        }

        return $container->privates['mailer.transport_factory.native'] = new \Symfony\Component\Mailer\Transport\NativeTransportFactory($a, ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
