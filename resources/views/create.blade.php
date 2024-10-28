<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Mensaje</title>
</head>
<body>
    <h1>Registrar Nuevo Mensaje</h1>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        
        <label for="text">Texto:</label>
        <textarea name="text" id="text" required></textarea>
        
        <label for="color">Color:</label>
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="black">Negro</option>
            <option value="green">Verde</option>
        </select>

        <label for="image_url">URL de Imagen:</label>
        <input type="text" name="image_url" id="image_url">

        <label for="underline"><input type="checkbox" name="underline" value="underline"> Subrayado</label>
        <label for="bold"><input type="checkbox" name="bold" value="bold"> Negrita</label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
