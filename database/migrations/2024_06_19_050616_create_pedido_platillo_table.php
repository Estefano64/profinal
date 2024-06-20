<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoPlatilloTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido_platillos', function (Blueprint $table) {
            $table->id('idPedidoPlatillo');
            $table->foreignId('idPedido')->constrained('pedidos','idPedido');
            $table->foreignId('idPlatillo')->constrained('platillos','idPlatillo');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_platillo');
    }
};
