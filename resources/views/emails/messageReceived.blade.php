<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p> Recibiste un mensaje de: {{ $msg['nombre'] }} - {{ $msg['email'] }}</p>
    <p>Asunto: {{ $msg['asunto'] }}</p>
    <p>Mensaje: {{ $msg['mensaje'] }}</p>
</body>
</html>

