<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
})->name('home');

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

