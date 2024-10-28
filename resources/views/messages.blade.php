<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>

        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    <li style="color: {{ $message->color }}; text-decoration: {{ $message->underline }}; font-weight: {{ $message->bold }}">
                        {{ $message->text }}
                        @if($message->image_url)
                            <img src="{{ $message->image_url }}" alt="Imagen" style="max-width: 100px; display: block; margin-top: 5px;">
                        @endif
                        <button class="modificar" onclick="openEditModal({{ $message->id }})">Modificar</button>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="modal-overlay" id="modalOverlay"></div>
    <div id="editModal">
        <h1 class="modificar">Modificar</h1>
        <form id="editForm" method="POST" action="">
            @csrf
            @method('PUT')       
            <label for="editText">Texto:</label>
            <textarea name="text" id="editText" required></textarea>
            
            <label for="editColor">Color:</label>
            <select name="color" id="editColor">
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="black">Negro</option>
                <option value="green">Verde</option>
            </select>

            <label for="editImage_url">URL de Imagen:</label>
            <input type="text" name="image_url" id="editImage_url">

            <label for="editUnderline"><input type="checkbox" name="underline" value="underline" id="editUnderline"> Subrayado</label>
            <label for="editBold"><input type="checkbox" name="bold" value="bold" id="editBold"> Negrita</label>

            <button type="submit">Modificar</button>
        </form>
    </div>
    <script src="{{ asset('js/modal.js') }}"></script> 
</body>
</html>


