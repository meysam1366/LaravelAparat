<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\ServiceProvider;

class LaravelAparatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/aparat.php' => config_path('aparat.php'),
            __DIR__.'/resources/views' => resource_path('views/vendor/aparat')
        ]);

        $this->registerView();
        $this->registerRoutes();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/aparat.php',
            'aparat'
        );
    }

    protected function registerView()
    {
        $this->loadViewsFrom(__DIR__.'/views/','aparat');
    }

    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }
}
