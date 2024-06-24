<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\CuentaClienteController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\PedidoPlatilloController;

Route::get('/', function () {
    return view('home');
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
    Route::resource('pedidos', PedidoController::class);
    Route::resource('cuentas', CuentaController::class);
    Route::resource('pedidoPlatillos', PedidoPlatilloController::class);
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




//rutas para el navBar

Route::get('/menu', function () {
    return view('mainpage.barraTop.menu');
})->name('menu');

Route::get('/establecimiento', function () {
    return view('mainpage.barraTop.establecimiento');
})->name('establecimiento');

Route::get('/quienes-somos', function () {
    return view('mainpage.barraTop.quienesSomos');
})->name('quienes-somos');

Route::get('/contacto', function () {
    return view('mainpage.barraTop.contacto');
})->name('contacto');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

