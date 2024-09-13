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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id('id_transaccion');
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('id_propiedad')->constrained('propiedades')->onDelete('cascade');
            $table->decimal('monto', 15, 2);
            $table->enum('tipo_transaccion', ['compra', 'alquiler']);
            $table->timestamp('fecha_transaccion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('estado', ['completada', 'pendiente', 'cancelada']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
