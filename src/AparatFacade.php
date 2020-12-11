<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\Facades\Facade;

class AparatFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aparat';
    }
}
