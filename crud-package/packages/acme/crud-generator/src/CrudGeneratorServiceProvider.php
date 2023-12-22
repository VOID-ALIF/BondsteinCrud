<?php

namespace Acme\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadRoutesFrom(__DIR__.'/crud-routes.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\GenerateCrudCommand::class,
                Commands\PublishCommand::class,
            ]);
        }
        $this->publishes([
            __DIR__.'/config/crud-generator.php' => config_path('crud-generator.php'),
        ], 'config');
    }
}
