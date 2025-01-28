<?php declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BabDev\PagerfantaBundle\Serializer\Normalizer\PagerfantaNormalizer;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set('pagerfanta.serializer.normalizer', PagerfantaNormalizer::class)
        ->tag('serializer.normalizer')
    ;
};
