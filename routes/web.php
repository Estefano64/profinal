<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\CuentaClienteController;
use App\Http\Controllers\MetodoPagoController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Grupo de rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::resource('mesas', MesaController::class);
    Route::resource('platillos', PlatilloController::class);
    Route::resource('cuentaClientes', CuentaClienteController::class);
    Route::resource('metodoPagos', MetodoPagoController::class);
});

Route::get('/home', function () {
    return view('home');
})->name('home');

//rutas para las categorias de platillos que ofrece

Route::get('/info', function () {
    return view('mainpage.info');
})->name('info');

Route::get('/brasas', function () {
    return view('mainpage.brasas');
})->name('brasas');

Route::get('/bebidas', function () {
    return view('mainpage.bebidas');
})->name('bebidas');

Route::get('/combinados', function () {
    return view('mainpage.combinados');
})->name('combinados');

Route::get('/extras', function () {
    return view('mainpage.extras');
})->name('extras');

Route::get('/parrillas', function () {
    return view('mainpage.parrillas');
})->name('parrillas');

Route::get('/piqueos', function () {
    return view('mainpage.piqueos');
})->name('piqueos');

//rutas para los combos de la hompeage

Route::get('/comboPersonal', function () {
    return view('mainpage.comboPersonal');
})->name('comboPersonal');

Route::get('/comboPareja', function () {
    return view('mainpage.comboPareja');
})->name('comboPareja');

Route::get('/comboFamiliar', function () {
    return view('mainpage.comboFamiliar');
})->name('comboFamiliar');