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
            $table->id("id_transaccion"); 
            $table->date("fecha");
            $table->integer("id_cliente");
            $table->string("detalles"); 
            $table->integer("total");
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
