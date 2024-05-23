<?php

namespace ContainerSZPXUSy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDateHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\DateHelper' shared autowired service.
     *
     * @return \App\Service\DateHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'DateHelper.php';

        return $container->services['App\\Service\\DateHelper'] = new \App\Service\DateHelper();
    }
}
