<?php

namespace ContainerHguW1zm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.factory' shared service.
     *
     * @return \ApiPlatform\OpenApi\Factory\OpenApiFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.openapi.factory'] = new \ApiPlatform\OpenApi\Factory\OpenApiFactory(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), ($container->privates['api_platform.json_schema.backward_compatible_schema_factory'] ?? $container->load('getApiPlatform_JsonSchema_BackwardCompatibleSchemaFactoryService')), ($container->privates['api_platform.filter_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])), $container->parameters['api_platform.formats'], ($container->privates['api_platform.openapi.options'] ?? $container->load('getApiPlatform_Openapi_OptionsService')), new \ApiPlatform\State\Pagination\PaginationOptions(true, 'page', false, 'itemsPerPage', false, 'pagination', 30, NULL, false, false, 'partial'), ($container->privates['api_platform.router'] ?? self::getApiPlatform_RouterService($container)));
    }
}
