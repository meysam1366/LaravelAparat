<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\ServiceProvider;

class LaravelAparatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/aparat.php' => config_path('aparat.php'),
        ], 'aparat-config')
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/aparat.php',
            'aparat'
        )
    }
}
