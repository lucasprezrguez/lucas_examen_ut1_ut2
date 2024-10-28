<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message;
use App\Http\Controllers\MessageController; 
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = Message::all();
    return view('messages', ['messages' => $messages]);
});

Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/messages/delete', function () {
    $messages = Message::all();
    return view('delete_messages', ['messages' => $messages]);
});

Route::post('/messages/delete', function (Request $request) {
    Message::destroy($request->messages); 
    return redirect('/messages');
});

Route::post('/messages/{id}', [MessageController::class, 'store'])->name('messages.edit');

Route::get('/messages/{id}/edit', [MessageController::class, 'show']);