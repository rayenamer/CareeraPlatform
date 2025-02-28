<?php

namespace ContainerY9ihsw7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Loader_IniService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
}
