<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto no encontrado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Oops! Producto no encontrado , no es el producto que buscas</h1>
        <p>este producto no lo tenemos en stock o se abra eliminado por el administrador.</p>
        <a href="{{ route('productos.index') }}">Volver a la lista de productos</a>
    </div>
</body>
</html>
