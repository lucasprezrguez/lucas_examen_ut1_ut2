<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Modelo para representar la tabla 'messages' en la base de datos
class Message extends Model
{
    // Campos que se pueden rellenar directamente en la tabla
    protected $fillable = [
        'text', // Contenido del mensaje
        'color', // Color del mensaje
        'image_url', // URL opcional de una imagen que se muestra con el mensaje
    ];
}
