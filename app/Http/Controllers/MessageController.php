<?php

namespace App\Http\Controllers;

use App\Models\Message; 
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required', 
            'color' => 'required|in:red,blue,black,green',
            'image_url' => 'nullable|url', 
            'underline' => 'nullable|in:underline',
            'bold' => 'nullable|in:bold',
        ]);

        Message::create($request->only('text', 'color', 'image_url', 'underline', 'bold'));

        return redirect('/messages')->with('success', 'Mensaje creado correctamente.');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'color' => 'required|in:red,blue,black,green',
            'image_url' => 'nullable|url',
            'underline' => 'nullable|in:underline',
            'bold' => 'nullable|in:bold',
        ]);

        Message::where('id', $id)->update([
            'text' => $request->text,
            'color' => $request->color,
            'image_url' => $request->image_url,
            'underline' => $request->underline,
            'bold' => $request->bold,
        ]);
		
		return redirect('/messages')->with('success', 'Mensaje modificado correctamente.');
    }

    public function show($id)
    {
        $message = Message::find($id);

        return response()->json($message);
    }
}
