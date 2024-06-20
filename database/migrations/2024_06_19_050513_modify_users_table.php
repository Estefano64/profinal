<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('rol', ['Mozo', 'Encargado', 'Cajero']);
            $table->enum('nivelAcceso', ['I', 'II', 'III']);
            $table->string('DNI', 20)->unique();
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['rol', 'nivelAcceso', 'DNI', 'direccion', 'telefono']);
        });
    }
}
