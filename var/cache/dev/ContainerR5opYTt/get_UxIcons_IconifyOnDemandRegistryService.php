<?php

namespace ContainerR5opYTt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_IconifyOnDemandRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux_icons.iconify_on_demand_registry' shared service.
     *
     * @return \Symfony\UX\Icons\Registry\IconifyOnDemandRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/Registry/IconifyOnDemandRegistry.php';

        return $container->privates['.ux_icons.iconify_on_demand_registry'] = new \Symfony\UX\Icons\Registry\IconifyOnDemandRegistry(($container->privates['.ux_icons.iconify'] ?? $container->load('get_UxIcons_IconifyService')));
    }
}
