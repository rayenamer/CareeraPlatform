<?php

namespace Container1C6dr3q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_GmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.gmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.transport_factory.gmail'])) {
            return $container->privates['mailer.transport_factory.gmail'];
        }

        return $container->privates['mailer.transport_factory.gmail'] = new \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory($a, ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
