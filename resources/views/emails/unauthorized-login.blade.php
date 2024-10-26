<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento de Inicio de Sesión No Autorizado</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #e74c3c;
        }
        p {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alerta de Seguridad</h1>
        <p>Se ha detectado un intento de inicio de sesión no autorizado.</p>
        <p><strong>Correo electrónico:</strong> {{ $email }}</p>
        <p>Por favor, revisa la actividad de inicio de sesión y toma las medidas necesarias.</p>
        <p>Gracias,</p>
        <p>El equipo de seguridad del Sistema de Triage</p>
    </div>
</body>
</html>
