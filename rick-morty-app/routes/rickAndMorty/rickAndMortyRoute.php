<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RickAndMortyController;

Route::prefix('/rick-and-morty')->group(function () {
    Route::get('/', [RickAndMortyController::class, 'index'])->name('index');
    Route::get('/buscar', [RickAndMortyController::class, 'search'])->name('search');
});