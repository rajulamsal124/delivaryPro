<?php

namespace ContainerR5opYTt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagerfanta_View_TwitterBootstrap3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pagerfanta.view.twitter_bootstrap3' shared service.
     *
     * @return \Pagerfanta\View\TwitterBootstrap3View
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/View/ViewInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/View/View.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/View/TemplateView.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/View/TwitterBootstrapView.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/View/TwitterBootstrap3View.php';

        return $container->privates['pagerfanta.view.twitter_bootstrap3'] = new \Pagerfanta\View\TwitterBootstrap3View();
    }
}
