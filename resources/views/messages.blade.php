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

        <!-- Si no hay mensajes, muestra un mensaje -->
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <!-- Muestra los mensajes en una lista, con color y, si está disponible, una imagen -->
            <ul>
                @foreach($messages as $message)
                    <li style="color: {{ $message->color }}">
                        {{ $message->text }}
                        @if($message->image_url)
                            <img src="{{ $message->image_url }}" alt="Imagen" style="max-width: 100px; display: block; margin-top: 5px;">
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
