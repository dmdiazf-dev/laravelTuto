<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Contenido del Email</h3>
    <pre>
        <p>Has recibido un mensaje de: </p>
        <ul>
            <li>Nombre: {{ $msg["txtNombres"] . " " . $msg["txtApellidos"] }}</li>
            <li>Email: {{ $msg["txtEmail"] }}</li>
            <li>Direcci&oacute;n: {{ $msg["txtDireccion"] }}</li>
            <li>Tel&eacute;fono: {{ $msg["txtTelefono"] }}</li>
            <li>Asunto: <b>{{ $msg["txtAsunto"] }}</b></li>
            <li>Mensaje: {{ $msg["txtMensaje"] }}</li>
        </ul>
    </pre>
</body>
</html>
