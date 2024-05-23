<?php

namespace ContainerSZPXUSy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KUYby1XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kUYby1X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kUYby1X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'locationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService', true],
        ], [
            'entityManagerInterface' => '?',
            'locationRepository' => 'App\\Repository\\LocationRepository',
        ]);
    }
}