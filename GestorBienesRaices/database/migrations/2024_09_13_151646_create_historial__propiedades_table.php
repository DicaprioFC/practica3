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
        Schema::create('historial_propiedades', function (Blueprint $table) {
            $table->id('id_historial');
            $table->foreignId('id_propiedad')->constrained('propiedades')->onDelete('cascade');
            $table->enum('estado_anterior', ['disponible', 'en negociacion', 'vendida', 'alquilada']);
            $table->enum('estado_nuevo', ['disponible', 'en negociacion', 'vendida', 'alquilada']);
            $table->timestamp('fecha_cambio')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial__propiedades');
    }
};
