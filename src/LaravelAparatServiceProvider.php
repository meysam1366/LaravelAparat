<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\ServiceProvider;

class LaravelAparatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/aparat.php' => config_path('aparat.php'),
            __DIR__.'/views' => resource_path('views/vendor/aparat')
        ]);
        $this->loadViewsFrom(__DIR__.'/views/','aparat');
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/aparat.php',
            'aparat'
        );
    }
}
