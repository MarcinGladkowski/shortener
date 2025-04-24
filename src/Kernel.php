<?php

declare(strict_types=1);

namespace App;

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function registerBundles(): iterable
    {
        yield new FrameworkBundle();
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        // register all classes in /src/ as service
        $container->services()
            ->load('App\\', __DIR__.'/*')
            ->autowire()
            ->autoconfigure();
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        // load the routes defined as PHP attributes
        // (use 'annotation' as the second argument if you define routes as annotations)
        $routes->import(__DIR__.'/Controller/', 'attribute');
    }
    // optionally, you can define the getCacheDir() and getLogDir() methods
    // to override the default locations for these directories
}