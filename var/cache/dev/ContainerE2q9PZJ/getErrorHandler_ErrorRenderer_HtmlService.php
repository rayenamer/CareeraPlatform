<?php

namespace ContainerE2q9PZJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorHandler_ErrorRenderer_HtmlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        return $container->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container)), 'C:\\careera', \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}
