<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['https'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/show/{id}', [HomeController::class, 'show'])->name('home.show');
    Route::post('/store', [HomeController::class, 'store'])->name('home.store');
    Route::post('/delete', [HomeController::class, 'delete'])->name('home.delete');

});

