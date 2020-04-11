<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>

	<h1>Contenido del email</h1>

	<p class="lead">Recibiste un Mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }} </p>
	<p><strong>Asunto:</strong> {{ $msg['subject'] }} </p>
	<p><strong>Contenido:</strong> {{ $msg['content'] }} </p>

</body>
</html>