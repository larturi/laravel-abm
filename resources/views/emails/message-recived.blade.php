<!DOCTYPE html>
<html>
<head>
    <title>Mensaje recibido</title>
</head>
<body>

    <p>Recibiste un mensaje de: {{ $mensaje['name'] }} - {{ $mensaje['email'] }}</p>

    <p><strong>Asunto: {{ $mensaje['subject'] }}</strong></p>

    <p><strong>Contenido: {{ $mensaje['content'] }}</strong></p>

</body>
</html>
