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
        Schema::create('valoracion', function (Blueprint $table) {
            $table->id('id_valoracion');
            $table->unsignedTinyInteger('puntuacion');
            $table->date('fecha');
            $table->text('comentario')->nullable();
            $table->timestamps(false); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
