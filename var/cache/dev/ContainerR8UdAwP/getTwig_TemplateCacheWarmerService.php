<?php

namespace ContainerR8UdAwP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_TemplateCacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $container), new \Symfony\Bundle\TwigBundle\TemplateIterator(($container->services['kernel'] ?? $container->get('kernel', 1)), ['C:\\careera\\vendor\\symfony\\twig-bridge/Resources/views/Email' => 'email', 'C:\\careera\\vendor\\symfony\\twig-bridge/Resources/views/Form' => NULL], 'C:\\careera/templates', ['*.twig']));
    }
}
