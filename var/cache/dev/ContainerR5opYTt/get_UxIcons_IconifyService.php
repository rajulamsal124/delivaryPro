<?php

namespace ContainerR5opYTt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_IconifyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux_icons.iconify' shared service.
     *
     * @return \Symfony\UX\Icons\Iconify
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/Iconify.php';

        return $container->privates['.ux_icons.iconify'] = new \Symfony\UX\Icons\Iconify(($container->services['cache.system'] ?? self::getCache_SystemService($container)), 'https://api.iconify.design', ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));
    }
}
