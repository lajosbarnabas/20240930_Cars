<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cars', [CarController::class, 'showCars']);

Route::post('/cars/search-by-class', [CarController::class, 'searchByClass']);
