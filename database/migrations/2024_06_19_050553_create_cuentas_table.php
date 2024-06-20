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
            $table->decimal('totalPagar', 10, 2);
            $table->foreignId('idCuentaCliente')->nullable()->constrained('cuenta_clientes','idCuentaCliente');
            $table->foreignId('idMetodoPago')->nullable()->constrained('metodo_pagos','idMetodoPago');
            $table->enum('estado', ['pagado', 'pendiente'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
