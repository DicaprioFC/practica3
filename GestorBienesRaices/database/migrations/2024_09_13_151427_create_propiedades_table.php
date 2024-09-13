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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id('id_propiedad');
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->enum('tipo_propiedad', ['comercial', 'residencial']);
            $table->decimal('area_construida', 10, 2);
            $table->decimal('area_terraza', 10, 2);
            $table->string('ubicacion', 255);
            $table->decimal('precio', 15, 2);
            $table->enum('estado', ['disponible', 'en negociacion', 'vendida', 'alquilada']);
            $table->year('año_construccion');
            $table->integer('dormitorios')->default(0);
            $table->integer('baños')->default(0);
            $table->integer('parqueos')->default(0);
            $table->integer('pisos')->default(0);
            $table->point('geolocalizacion');
            $table->string('tipo_suelo', 50);
            $table->string('servicios_comunitarios', 255);
            $table->decimal('gastos_comunes', 10, 2);
            $table->enum('estado_inmueble', ['a estrenar', 'usado']);
            $table->enum('entrega', ['inmediata', 'otra_fecha']);
            $table->timestamp('fecha_publicacion')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
