<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Nueva migración para añadir el campo 'image_url' en la tabla 'messages'
return new class extends Migration
{
    public function up(): void
    {
        // Añade una columna de tipo 'string' llamada 'image_url', que es opcional (nullable)
        Schema::table('messages', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('color');
        });
    }

    public function down(): void
    {
        // Elimina la columna 'image_url' si se deshace esta migración
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
};
