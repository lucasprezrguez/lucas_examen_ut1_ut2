<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Mensaje</title>
</head>
<body>
    <h1>Registrar Nuevo Mensaje</h1>

    <!-- Formulario para enviar datos de un nuevo mensaje a la ruta 'messages.store' -->
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf <!-- Token de seguridad necesario en formularios POST -->
        
        <!-- Campo para el texto del mensaje -->
        <label for="text">Texto:</label>
        <textarea name="text" id="text" required></textarea>
        
        <!-- Selección de color del mensaje -->
        <label for="color">Color:</label>
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="black">Negro</option>
            <option value="green">Verde</option>
        </select>

        <!-- Campo para la URL opcional de una imagen -->
        <label for="image_url">URL de Imagen:</label>
        <input type="text" name="image_url" id="image_url">

        <!-- Botón para enviar el formulario -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
