<?php

namespace ContainerR5opYTt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_CurrentCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine_migrations.current_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.doctrine_migrations.current_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:current', [], 'Outputs the current version', false, #[\Closure(name: 'doctrine_migrations.current_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\CurrentCommand => ($container->privates['doctrine_migrations.current_command'] ?? $container->load('getDoctrineMigrations_CurrentCommandService')));
    }
}
