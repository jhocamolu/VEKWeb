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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->onDelete('cascade'); // Página a la que pertenece
            $table->foreignId('section_type_id')->constrained()->onDelete('cascade'); // Tipo de sección
            $table->integer('order')->default(0); // Orden dentro de la página
            $table->text('content'); // Contenido en HTML dentro de <text>
            $table->foreignId('media_location_id')->nullable()->constrained('media_locations')->onDelete('set null'); // Ubicación de medios
            $table->boolean('is_active')->default(true); // Activo o no
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
