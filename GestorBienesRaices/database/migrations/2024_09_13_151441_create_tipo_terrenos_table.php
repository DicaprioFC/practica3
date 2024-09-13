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
        Schema::create('tipos_terrenos', function (Blueprint $table) {
            $table->id('id_tipo_terreno');
            $table->foreignId('id_propiedad')->constrained('propiedades')->onDelete('cascade');
            $table->enum('nombre_tipo_terreno', ['casa', 'terreno', 'departamento', 'local_comercial', 'oficina']);
            $table->enum('nombre_categoria', ['alquiler', 'venta', 'compra']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_terrenos');
    }
};
