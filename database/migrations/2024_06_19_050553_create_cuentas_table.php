<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id('idCuenta');
            $table->foreignId('idCuentaCliente')->constrained('cuenta_clientes','idCuentaCliente');
            $table->foreignId('idMetodoPago')->constrained('metodo_pagos','idMetodoPago');
            $table->enum('estado', ['pagado', 'pendiente'])->default('pendiente');           
            $table->decimal('subtotal', 6, 2);
            $table->decimal('impuesto', 6, 2);
            $table->decimal('total', 6, 2);
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
        
        Schema::dropIfExists('cuentas');
        
        // Reactivar restricciones de clave foránea
        Schema::enableForeignKeyConstraints();
    }
};
