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
        Schema::create('fotos_videos', function (Blueprint $table) {
            $table->id('id_media');
            $table->foreignId('id_propiedad')->constrained('propiedades')->onDelete('cascade');
            $table->string('url_media', 255);
            $table->enum('tipo_media', ['foto', 'video']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_videos');
    }
};
