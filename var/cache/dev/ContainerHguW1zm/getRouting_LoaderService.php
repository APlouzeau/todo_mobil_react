<?php

namespace ContainerHguW1zm;

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
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($container->services['kernel'] ?? $container->get('kernel', 1));

        $c = new \Symfony\Component\HttpKernel\Config\FileLocator($b);
        $d = new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('dev');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel' => ['services', 'kernel', 'getKernelService', true],
            'security.route_loader.logout' => ['privates', 'security.route_loader.logout', 'getSecurity_RouteLoader_LogoutService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'security.route_loader.logout' => 'Symfony\\Bundle\\SecurityBundle\\Routing\\LogoutRouteLoader',
        ]), 'dev'));
        $a->addLoader(new \ApiPlatform\Symfony\Routing\ApiLoader($b, ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], false, true, true, false, false, NULL));
        $a->addLoader($d);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeFileLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($c));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
