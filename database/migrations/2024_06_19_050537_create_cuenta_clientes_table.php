<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaClientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuenta_clientes', function (Blueprint $table) {
            $table->id('idCuentaCliente');
            $table->string('nombre', 50);
            $table->string('dni', 8)->unique();
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
        
        Schema::dropIfExists('cuenta_clientes');
        
        // Reactivar restricciones de clave foránea
        Schema::enableForeignKeyConstraints();
    }
};
