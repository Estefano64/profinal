<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) { // Define una ruta GET en la URI '/user' que ejecuta una función anónima cuando se accede
    return $request->user(); // Devuelve el usuario autenticado que hizo la solicitud actual
})->middleware('auth:sanctum'); // Aplica el middleware 'auth:sanctum' a esta ruta para verificar la autenticación mediante Laravel Sanctum
