<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Eliminar Mensajes</h1>
        
        <!-- Si no hay mensajes, muestra un mensaje -->
        @if($messages->isEmpty())
            <p>No hay mensajes disponibles para eliminar.</p>
        @else
            <!-- Formulario para enviar los IDs de los mensajes seleccionados -->
            <form action="{{ url('/messages/delete') }}" method="POST">
                @csrf
                <ul>
                    <!-- Lista de mensajes con checkbox para seleccionar los que se eliminarán -->
                    @foreach($messages as $message)
                        <li>
                            <input type="checkbox" name="messages[]" value="{{ $message->id }}">
                            {{ $message->text }}
                        </li>
                    @endforeach
                </ul>
                <button type="submit">Eliminar Mensajes Seleccionados</button>
            </form>
        @endif
    </div>
</body>
</html>
