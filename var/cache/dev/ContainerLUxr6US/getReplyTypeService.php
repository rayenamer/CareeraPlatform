<?php

namespace ContainerLUxr6US;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReplyTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ReplyType' shared autowired service.
     *
     * @return \App\Form\ReplyType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ReplyType'] = new \App\Form\ReplyType();
    }
}
