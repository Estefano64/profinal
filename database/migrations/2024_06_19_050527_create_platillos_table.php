<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatillosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('platillos', function (Blueprint $table) {
            $table->id('idPlatillo');
            $table->string('nombre', 40);
            $table->string('descripcion', 100)->nullable();
            $table->decimal('precio', 8, 2);
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
        
        Schema::dropIfExists('platillos');
        
        // Reactivar restricciones de clave foránea
        Schema::enableForeignKeyConstraints();    
        
    }
}
