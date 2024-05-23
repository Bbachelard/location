<?php

namespace ContainerSZPXUSy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EV60QfuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EV60Qfu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EV60Qfu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\MainController::calandrier' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Controller\\MainController::index' => ['privates', '.service_locator.KYEXwhH', 'get_ServiceLocator_KYEXwhHService', true],
            'App\\Controller\\MainController::jour' => ['privates', '.service_locator.kUYby1X', 'get_ServiceLocator_KUYby1XService', true],
            'App\\Controller\\MainController::location' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\MainController:calandrier' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Controller\\MainController:index' => ['privates', '.service_locator.KYEXwhH', 'get_ServiceLocator_KYEXwhHService', true],
            'App\\Controller\\MainController:jour' => ['privates', '.service_locator.kUYby1X', 'get_ServiceLocator_KUYby1XService', true],
            'App\\Controller\\MainController:location' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\MainController::calandrier' => '?',
            'App\\Controller\\MainController::index' => '?',
            'App\\Controller\\MainController::jour' => '?',
            'App\\Controller\\MainController::location' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\MainController:calandrier' => '?',
            'App\\Controller\\MainController:index' => '?',
            'App\\Controller\\MainController:jour' => '?',
            'App\\Controller\\MainController:location' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}