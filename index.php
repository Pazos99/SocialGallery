<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<script type="text/javascript" src="services/validaciones.js"></script>
	<style type="text/css">
		.mensaje {
			display: none;
		}

	</style>
</head>
<body>
	<h1>Login</h1>
	<form action="services/login.proc.php" method="POST" name="formulario" enctype="multipart/form-data" onsubmit="return validacionLogin()">
		<p id="mensaje" class="mensaje"></p>
		<br>
		<!--Campo Nombre-->
		<input type="text" placeholder="Nom..." name="user" id="user">
		<br>
		<!--Campo Email-->		
		<input type="password" placeholder="Password..." name="password" id="password">
		<br>
		<!--Boton enviar-->		
		<input type="submit" class="btn btn-primary" value="Enviar" >
	</form>

</body>
</html>