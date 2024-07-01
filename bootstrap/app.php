<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php', // Configura la ruta para el archivo web.php
        api: __DIR__.'/../routes/api.php', // Configura la ruta para el archivo api.php
        commands: __DIR__.'/../routes/console.php', // Configura la ruta para el archivo console.php
        health: '/up', // Configura la ruta de salud (health check) como '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Define middleware para la aplicación
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Configura cómo manejar las excepciones en la aplicación
    })
    ->create();
