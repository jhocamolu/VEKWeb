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
        Schema::create('media_locations', function (Blueprint $table) {
            $table->id();
            $table->string('source_name'); // Nombre del origen (Ej: Servidor, AWS S3, YouTube, etc.)
            $table->string('base_url'); // URL base de los archivos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_locations');
    }
};
