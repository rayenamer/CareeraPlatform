<?php

namespace ContainerOMjdY6V;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_WhenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'validator.when' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\WhenValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.when'] = new \Symfony\Component\Validator\Constraints\WhenValidator(($container->privates['validator.expression_language'] ?? $container->load('getValidator_ExpressionLanguageService')));
    }
}
