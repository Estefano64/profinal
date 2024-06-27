<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idPedido');
            $table->enum('estado', ['pendiente', 'completado'])->default('pendiente');
            $table->enum('tipo', ['paraLlevar', 'enLocal']);
            $table->foreignId('idMesa')->nullable()->constrained('mesas','idMesa');
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('idCuenta')->constrained('cuentas','idCuenta');
            $table->foreignId('idPedidoPlatillo')->constrained('pedido_platillos','idPedidoPlatillo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {     
        Schema::dropIfExists('pedidos');      
    }
};
