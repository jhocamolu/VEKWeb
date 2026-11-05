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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del ítem de menú
            $table->string('route')->nullable(); // URL completa o segmento de ruta
            $table->foreignId('page_id')->nullable()->constrained()->onDelete('cascade'); // Relación con página
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade'); // Para submenús
            $table->integer('order')->default(0); // Orden del menú
            $table->boolean('is_active')->default(true); // Para activar o desactivar el enlace
            $table->timestamps();
            $table->softDeletes(); // Soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
