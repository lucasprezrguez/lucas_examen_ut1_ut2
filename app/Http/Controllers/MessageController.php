<?php

namespace App\Http\Controllers;

use App\Models\Message; // Importa el modelo Message para trabajar con la tabla de mensajes
use Illuminate\Http\Request; // Importa la clase Request para manejar datos del formulario

// Controlador para gestionar acciones relacionadas con los mensajes
class MessageController extends Controller
{
    // Muestra el formulario para crear un mensaje
    public function create()
    {
        return view('create'); // Carga la vista 'create' donde está el formulario de creación
    }

    // Almacena un nuevo mensaje en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario

        $request->validate([
            'text' => 'required', // El campo de texto es obligatorio
            'color' => 'required|in:red,blue,black,green', // Solo permite estos colores
            'image_url' => 'nullable|url', // URL de imagen opcional y debe ser una URL válida
        ]);

        // Crea un nuevo mensaje en la tabla 'messages' con los datos válidos
        Message::create($request->only('text', 'color', 'image_url'));

        // Redirige al usuario a la lista de mensajes con un mensaje de éxito
        return redirect('/messages')->with('success', 'Mensaje creado correctamente.');
    }
}
