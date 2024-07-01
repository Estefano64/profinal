<?php

use Illuminate\Support\Facades\Route; // Facade para la gestión de rutas en Laravel
use App\Http\Controllers\MesaController; // Controlador para las mesas
use App\Http\Controllers\PlatilloController; // Controlador para los platillos
use App\Http\Controllers\CuentaClienteController; // Controlador para los clientes de cuenta
use App\Http\Controllers\MetodoPagoController; // Controlador para los métodos de pago
use App\Http\Controllers\PedidoController; // Controlador para los pedidos
use App\Http\Controllers\CuentaController; // Controlador para las cuentas
use App\Http\Controllers\PedidoPlatilloController; // Controlador para los platillos de pedido
use App\Http\Controllers\UserController; // Controlador para los usuarios

Route::get('/', function () { // Ruta para la página de inicio
    return view('home');
});

Route::middleware([ // Grupo de rutas que requieren autenticación mediante Sanctum y Jetstream
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { // Ruta para el dashboard
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () { // Grupo de rutas que requieren autenticación básica
    Route::resource('mesas', MesaController::class); // Rutas CRUD para las mesas
    Route::resource('platillos', PlatilloController::class); // Rutas CRUD para los platillos
    Route::resource('cuentaClientes', CuentaClienteController::class); // Rutas CRUD para los clientes de cuenta
    Route::resource('metodoPagos', MetodoPagoController::class); // Rutas CRUD para los métodos de pago
    Route::resource('pedidos', PedidoController::class); // Rutas CRUD para los pedidos
    Route::resource('cuentas', CuentaController::class); // Rutas CRUD para las cuentas
    Route::resource('pedidoPlatillos', PedidoPlatilloController::class); // Rutas CRUD para los platillos de pedido
    Route::resource('users', UserController::class); // Rutas CRUD para los usuarios
    Route::put('/cuentas/{cuenta}/generarBoleta', [CuentaController::class, 'generarBoleta'])->name('cuentas.generarBoleta'); // Ruta específica para generar boleta de cuenta
});

Route::get('/home', function () { // Ruta para la página de inicio
    return view('home');
})->name('home');

// Rutas para las categorías de platillos que ofrece

Route::get('/info', function () { // Ruta para la categoría 'info'
    return view('mainpage.info');
})->name('info');

Route::get('/brasas', function () { // Ruta para la categoría 'brasas'
    return view('mainpage.brasas');
})->name('brasas');

Route::get('/bebidas', function () { // Ruta para la categoría 'bebidas'
    return view('mainpage.bebidas');
})->name('bebidas');

Route::get('/combinados', function () { // Ruta para la categoría 'combinados'
    return view('mainpage.combinados');
})->name('combinados');

Route::get('/extras', function () { // Ruta para la categoría 'extras'
    return view('mainpage.extras');
})->name('extras');

Route::get('/parrillas', function () { // Ruta para la categoría 'parrillas'
    return view('mainpage.parrillas');
})->name('parrillas');

Route::get('/piqueos', function () { // Ruta para la categoría 'piqueos'
    return view('mainpage.piqueos');
})->name('piqueos');

// Rutas para los combos de la homepage

Route::get('/comboPersonal', function () { // Ruta para el combo personal
    return view('mainpage.comboPersonal');
})->name('comboPersonal');

Route::get('/comboPareja', function () { // Ruta para el combo de pareja
    return view('mainpage.comboPareja');
})->name('comboPareja');

Route::get('/comboFamiliar', function () { // Ruta para el combo familiar
    return view('mainpage.comboFamiliar');
})->name('comboFamiliar');

// Rutas para el navbar

Route::get('/menu', function () { // Ruta para 'menu' en el navbar
    return view('mainpage.barraTop.menu');
})->name('menu');

Route::get('/establecimiento', function () { // Ruta para 'establecimiento' en el navbar
    return view('mainpage.barraTop.establecimiento');
})->name('establecimiento');

Route::get('/quienes-somos', function () { // Ruta para 'quienes somos' en el navbar
    return view('mainpage.barraTop.quienesSomos');
})->name('quienes-somos');

Route::get('/contacto', function () { // Ruta para 'contacto' en el navbar
    return view('mainpage.barraTop.contacto');
})->name('contacto');


