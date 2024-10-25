<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message; // Importa el modelo de Message
use App\Http\Controllers\MessageController; // Importa el controlador de mensajes
use Illuminate\Http\Request; // Importa la clase Request para manejar datos del formulario

// Ruta principal que carga la vista de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para listar los mensajes almacenados
Route::get('/messages', function () {
    $messages = Message::all(); // Recupera todos los mensajes de la base de datos
    return view('messages', ['messages' => $messages]); // Muestra la vista 'messages' con los datos
});

// Ruta para mostrar el formulario de creación de mensajes
Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');

// Ruta para procesar la creación de mensajes
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

// Ruta para mostrar el formulario de eliminación de mensajes
Route::get('/messages/delete', function () {
    $messages = Message::all(); // Recupera todos los mensajes
    return view('delete_messages', ['messages' => $messages]); // Muestra la vista de eliminación
});

// Ruta para procesar la eliminación de mensajes
Route::post('/messages/delete', function (Request $request) {
    Message::destroy($request->messages); // Elimina los mensajes seleccionados
    return redirect('/messages'); // Redirige a la lista de mensajes
});
