<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Nueva migración para añadir el campo 'color' en la tabla 'messages'
return new class extends Migration
{
    public function up(): void
    {
        // Añade una columna de tipo 'string' llamada 'color' con valor por defecto 'black'
        Schema::table('messages', function (Blueprint $table) {
            $table->string('color')->default('black');
        });
    }

    public function down(): void
    {
        // Elimina la columna 'color' si se deshace esta migración
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('color');
        });
    }
};
