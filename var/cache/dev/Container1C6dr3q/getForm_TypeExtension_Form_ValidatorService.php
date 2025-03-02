<?php

namespace Container1C6dr3q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container));

        if (isset($container->privates['form.type_extension.form.validator'])) {
            return $container->privates['form.type_extension.form.validator'];
        }
        $b = ($container->privates['twig.form.renderer'] ?? $container->load('getTwig_Form_RendererService'));

        if (isset($container->privates['form.type_extension.form.validator'])) {
            return $container->privates['form.type_extension.form.validator'];
        }

        return $container->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($a, false, $b, ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
