<?php

namespace ContainerR5opYTt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Persistence_DatabaseResetter_Orm_SchemaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.persistence.database_resetter.orm.schema' shared service.
     *
     * @return \Zenstruck\Foundry\ORM\ResetDatabase\SchemaDatabaseResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Persistence/SymfonyCommandRunner.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ORM/ResetDatabase/BaseOrmResetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Persistence/ResetDatabase/BeforeFirstTestResetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Persistence/ResetDatabase/BeforeEachTestResetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ORM/ResetDatabase/OrmResetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ORM/ResetDatabase/SchemaDatabaseResetter.php';

        return $container->privates['.zenstruck_foundry.persistence.database_resetter.orm.schema'] = new \Zenstruck\Foundry\ORM\ResetDatabase\SchemaDatabaseResetter(($container->services['doctrine'] ?? self::getDoctrineService($container)), ['default'], ['default']);
    }
}
