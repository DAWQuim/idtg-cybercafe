<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('name'); // Nombre del cliente
            $table->string('surname'); // Apellidos del cliente
            $table->string('email')->unique(); // Correo electrónico único
            $table->string('password'); // Contraseña encriptada
            $table->string('DNI'); // DNI del cliente
            $table->string('telefono'); // Teléfono del cliente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
