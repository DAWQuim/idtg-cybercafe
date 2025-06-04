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
        Schema::create("productos", function (Blueprint $table) {
            $table->id();
            $table->string("descripcion");
            $table->string("nombre");
            $table->float("precio");
            $table->unsignedBigInteger("area_id")->nullable();
            $table->unsignedBigInteger("cliente_id")->nullable();
            $table->unsignedBigInteger("trabajador_id")->nullable();
            $table->timestamps();
        
            $table->foreign('area_id')->references('id_area')->on('area')->onDelete('set null');
            $table->foreign('cliente_id')->references('id_cliente')->on('cliente')->onDelete('set null');
            $table->foreign('trabajador_id')->references('id')->on('trabajador')->onDelete('set null');
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
