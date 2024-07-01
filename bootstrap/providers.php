<?php

return [
    App\Providers\AppServiceProvider::class, // Registra el proveedor de servicios de la aplicación principal
    App\Providers\FortifyServiceProvider::class, // Registra el proveedor de servicios para Fortify (autenticación)
    App\Providers\JetstreamServiceProvider::class, // Registra el proveedor de servicios para Jetstream (gestión de equipos)
];
