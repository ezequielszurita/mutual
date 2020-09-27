<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Mensaje</title>
</head>
<body>
        <p> <strong> Recibiste un mensaje de:</strong>  {{$msg['name'] }} - {{$msg['email'] }} </p>

        <p> <strong>Número de Contacto:</strong> {{$msg['codarea'] }}{{$msg['phone'] }} </p>

        <p><strong> Asunto: </strong> {{$msg['subject'] }}</p><br><br>
        
        <p> <strong>Contenido:</strong> {{$msg['message'] }}</p>

</body>
</html>
