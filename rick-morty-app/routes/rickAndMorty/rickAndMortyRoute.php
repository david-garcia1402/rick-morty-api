<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RickAndMortyController;

Route::prefix('/rick-and-morty')->group(function () {
    Route::get('/', [RickAndMortyController::class, 'index']);
    Route::get('/{id}', [RickAndMortyController::class, 'search']);
});