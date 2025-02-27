<?php

namespace Container8U6hmrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_EngineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.form.engine' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRendererEngine
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['twig.form.engine'])) {
            return $container->privates['twig.form.engine'];
        }

        return $container->privates['twig.form.engine'] = new \Symfony\Bridge\Twig\Form\TwigRendererEngine($container->parameters['twig.form.resources'], $a);
    }
}
