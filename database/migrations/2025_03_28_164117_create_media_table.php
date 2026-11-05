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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_location_id')->nullable()->constrained('media_locations')->onDelete('set null'); // Ubicación del archivo
            $table->foreignId('section_id')->nullable()->constrained()->onDelete('cascade'); // Sección a la que pertenece
            $table->foreignId('page_id')->nullable()->constrained()->onDelete('cascade'); // Página a la que pertenece
            $table->string('type'); // Tipo de archivo (imagen, video, audio, etc.)
            $table->string('path'); // Ruta del archivo o URL externa
            $table->string('alt_text')->nullable(); // Texto alternativo
            $table->integer('order')->default(0); // Orden en la galería o sección
            $table->boolean('is_active')->default(true); // Si se usa o está oculto
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
