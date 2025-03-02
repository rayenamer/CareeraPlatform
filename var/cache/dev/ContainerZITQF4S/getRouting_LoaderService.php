<?php

namespace ContainerZITQF4S;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminRouteGenerator'] ?? self::getAdminRouteGeneratorService($container));

        if (isset($container->services['routing.loader'])) {
            return $container->services['routing.loader'];
        }
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();

        $c = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)));
        $d = new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('dev');

        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
            'security.route_loader.logout' => ['privates', 'security.route_loader.logout', 'getSecurity_RouteLoader_LogoutService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'security.route_loader.logout' => 'Symfony\\Bundle\\SecurityBundle\\Routing\\LogoutRouteLoader',
        ]), 'dev'));
        $b->addLoader(new \EasyCorp\Bundle\EasyAdminBundle\Router\AdminRouteLoader($a, ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), $container->targetDir.''));
        $b->addLoader($d);
        $b->addLoader(new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader($c, $d));
        $b->addLoader(new \Symfony\Component\Routing\Loader\AttributeFileLoader($c, $d));
        $b->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($c));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($b, ['utf8' => true], []);
    }
}
