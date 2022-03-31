<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\ServiceProvider;

class AparatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/aparat.php' => config_path('aparat.php'),
            __DIR__.'/resources/views' => resource_path('views/vendor/aparat'),
            __DIR__.'/public/css' => public_path('vendor/css'),
            __DIR__.'/public/js' => public_path('vendor/js'),
            __DIR__.'/public/fonts' => public_path('vendor/fonts'),
            __DIR__.'/public/images' => public_path('vendor/images'),
            __DIR__.'/public/bower_components' => public_path('vendor/bower_components'),
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

        $this->app->singleton('aparat', function() {
            return new Aparat;
        });
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
