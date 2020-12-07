<?php

namespace meysammaghsoudi\LaravelAparat\routes;

use Illuminate\Support\Facades\Route;
use meysammaghsoudi\LaravelAparat\Controllers\AparatController;


Route::get('/', [AparatController::class, 'index']);
