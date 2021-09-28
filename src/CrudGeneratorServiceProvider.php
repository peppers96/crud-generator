<?php

namespace DioCreation\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/webpack.mix.js' => base_path('webpack.mix.js'),
        ]);

        $this->publishes([
            __DIR__ . '/../publish/views/' => base_path('resources/views/'),
        ]);

        $this->publishes([
            __DIR__ . '/../publish/js/' => base_path('resources/js/'),
        ]);

        $this->publishes([
            __DIR__ . '/../publish/less/' => base_path('resources/less/'),
        ]);

        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/crud-generator/'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'DioCreation\CrudGenerator\Commands\CrudCommand',
            'DioCreation\CrudGenerator\Commands\CrudControllerCommand',
            'DioCreation\CrudGenerator\Commands\CrudModelCommand',
            'DioCreation\CrudGenerator\Commands\CrudMigrationCommand',
            'DioCreation\CrudGenerator\Commands\CrudViewCommand',
            'DioCreation\CrudGenerator\Commands\CrudLangCommand',
            'DioCreation\CrudGenerator\Commands\CrudApiCommand',
            'DioCreation\CrudGenerator\Commands\CrudApiControllerCommand'
        );
    }
}
