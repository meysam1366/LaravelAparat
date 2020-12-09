<?php

namespace meysammaghsoudi\LaravelAparat\routes;

use Illuminate\Support\Facades\Route;
use meysammaghsoudi\LaravelAparat\Http\Controllers\AparatController;

Route::prefix('aparat')->middleware('web')->group(function() {
    Route::get('/getProfile', [AparatController::class, 'getProfile'])->name('getProfile');
    Route::get('/getCategories', [AparatController::class, 'getCategories'])->name('getCategories');
    Route::get('/sendVideo', [AparatController::class, 'showFormVideo'])->name('showFormVideo');
    Route::post('/sendVideo', [AparatController::class, 'sendVideo'])->name('sendVideo');
});

