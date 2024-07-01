<?php

use Illuminate\Foundation\Inspiring; // Importa la clase Inspiring del framework Laravel
use Illuminate\Support\Facades\Artisan; // Facade para interactuar con comandos de Artisan

Artisan::command('inspire', function () { // Define un nuevo comando Artisan llamado 'inspire'
    $this->comment(Inspiring::quote()); // Imprime en consola una cita inspiradora utilizando el método estático 'quote' de la clase Inspiring
})->purpose('Display an inspiring quote')->hourly(); // Establece el propósito del comando y lo programa para ejecutarse cada hora
