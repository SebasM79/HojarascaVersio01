<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav>
            <!-- Aquí va el menú o la barra de navegación -->
        </nav>

        <div class="content">
            @yield('content') <!-- Aquí se mostrará el contenido específico de cada vista -->
        </div>
    </div>
</body>
</html>
