<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'index']);

// Ruta para la página de botones
Route::get('/botones', function () {
    return view('buttons'); 
});

// Ruta para la página de tarjetas
Route::get('/tarjetas', function () {
    return view('cards'); 
});

