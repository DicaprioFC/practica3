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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('email', 100)->unique();
            $table->string('telefono', 15);
            $table->string('direccion', 255);
            $table->enum('tipo_usuario', ['admin', 'cliente', 'agente', 'propietario']);
            $table->boolean('verificado')->default(false);
            $table->timestamp('fecha_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('contraseña', 255);
            $table->datetime('ultimo_acceso')->nullable();
            $table->enum('estado_cuenta', ['activa', 'suspendida', 'eliminada'])->default('activa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
