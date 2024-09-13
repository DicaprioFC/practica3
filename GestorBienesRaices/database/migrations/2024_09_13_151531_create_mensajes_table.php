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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id('id_mensaje');
            $table->foreignId('id_usuario_remitente')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('id_usuario_destinatario')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('id_propiedad')->constrained('propiedades')->onDelete('cascade');
            $table->text('mensaje');
            $table->timestamp('fecha_envio')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
