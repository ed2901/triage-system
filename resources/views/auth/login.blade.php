<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Cargar CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <!-- Fuentes y estilos adicionales -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
    </style>

    <!-- Otros recursos (opcional) -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- si usas Vite -->
</head>
<body>
    <div id="app">
        <nav>
            <!-- Tu navegación aquí -->
        </nav>

        <main>
            @yield('content') <!-- Aquí se cargarán las vistas específicas -->
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Scripts adicionales -->
    @vite(['resources/js/app.js']) <!-- si usas Vite -->
</body>
</html>
