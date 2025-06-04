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
        Schema::create("transaccion", function (Blueprint $table) {
            $table->id(); 
            $table->date("fecha");
            $table->unsignedBigInteger("producto_id");
            $table->unsignedBigInteger("id_cliente");
            $table->unsignedBigInteger("user_id");  
            $table->string("detalles"); 
            $table->integer("total");
        
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // <-- agregar la FK
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
