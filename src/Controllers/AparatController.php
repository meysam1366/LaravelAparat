<?php

namespace meysammaghsoudi\LaravelAparat\Controllers;

use Illuminate\Routing\Controller;
use meysammaghsoudi\LaravelAparat\Aparat;

class AparatController extends Controller
{
    public function index()
    {
        $aparat = new Aparat();
        return $aparat->getProfile();
    }
}
