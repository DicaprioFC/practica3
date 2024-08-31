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
        Schema::create('poleras_deportivas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_jugador');
        $table->string('marca');
        $table->string('talla');
        $table->string('color');
        $table->string('material');
        $table->decimal('precio', 8, 2);
        $table->string('equipo');
        $table->integer('estado');
        $table->timestamps();
    });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:: dropIfExists('poleras_deportivas');
    }
};
