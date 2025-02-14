<?php

namespace ContainerR5opYTt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStofDoctrineExtensions_Listener_TimestampableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'stof_doctrine_extensions.listener.timestampable' shared service.
     *
     * @return \Gedmo\Timestampable\TimestampableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Mapping/MappedEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/AbstractTrackingListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Timestampable/TimestampableListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/clock/src/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/Clock.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Mapping/Driver/AttributeReader.php';

        $container->privates['stof_doctrine_extensions.listener.timestampable'] = $instance = new \Gedmo\Timestampable\TimestampableListener();

        $instance->setCacheItemPool(($container->privates['stof_doctrine_extensions.metadata_cache'] ??= new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $instance->setClock(($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
        $instance->setAnnotationReader(($container->privates['.stof_doctrine_extensions.reader'] ??= new \Gedmo\Mapping\Driver\AttributeReader()));

        return $instance;
    }
}
