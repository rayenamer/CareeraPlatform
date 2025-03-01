<?php

namespace ContainerJ2098To;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStimulus_UxControllersTwigRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'stimulus.ux_controllers_twig_runtime' shared service.
     *
     * @return \Symfony\UX\StimulusBundle\Twig\UxControllersTwigRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['stimulus.ux_controllers_twig_runtime'] = new \Symfony\UX\StimulusBundle\Twig\UxControllersTwigRuntime(($container->privates['stimulus.asset_mapper.controllers_map_generator'] ?? $container->load('getStimulus_AssetMapper_ControllersMapGeneratorService')), ($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['stimulus.asset_mapper.ux_package_reader'] ??= new \Symfony\UX\StimulusBundle\Ux\UxPackageReader('C:\\careera')), 'C:\\careera');
    }
}
