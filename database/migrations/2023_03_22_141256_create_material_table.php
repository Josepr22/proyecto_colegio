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
        Schema::create('categorias', function (Blueprint $table) {
            $table->engine="InnoDB";   
            $table->bigIncrements('id');
            $table->string('name');   
            $table->timestamps();
           });
        Schema::create('tipos', function (Blueprint $table) {
            $table->engine="InnoDB";   
            $table->bigIncrements('id');
            $table->string('name');   
            $table->timestamps();
           });
           Schema::create('materials', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->id();
            $table->string('titulo');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('tipo_id')->unsigned();
            $table->string('contenido');  
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('tipos');
        Schema::dropIfExists('material');
    }
};
