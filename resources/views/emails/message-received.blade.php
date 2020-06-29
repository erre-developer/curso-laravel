<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emails</title>
</head>
<body> 
    <h3>Mensaje Recivido</h3>
    <br>
    <p>From: {{ $mensaje['name'] }} - {{ $mensaje['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $mensaje['subject'] }}</p>
    <p><strong>Contenido:</strong> {{ $mensaje['content'] }}</p>
</body>
</html>

