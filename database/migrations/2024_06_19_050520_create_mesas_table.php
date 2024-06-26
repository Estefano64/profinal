<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id('idMesa');
            $table->integer('numero')->unique();
            $table->integer('capacidad');
            $table->enum('estado', ['disponible', 'ocupada']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Desactivar restricciones de clave foránea
        Schema::disableForeignKeyConstraints();
        
        Schema::dropIfExists('mesas');
        
        // Reactivar restricciones de clave foránea
        Schema::enableForeignKeyConstraints();
    }
};
