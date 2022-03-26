<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login Base de Datos</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body style="background-color: #B0E5F4">
	<div id="container">
		<header class="row">

			<nav class="col-12 navbar navbar-expand-md navbar-light bg-info text-white">
		
					<h1>Restaurante La Puebla</h1>
				
			</nav>

		</header>
	</div>
	<br>
	<br>
	
	<form action="./validar.php" method="POST">
		<h2>Autenticación de usuario</h2>
        	<input type="text" name="usuario" placeholder="&#128272;Usuario"><br> <!--Para poner el candado-->
         	<input type="password" name="clave"  placeholder="&#128272; Contraseña"><br>
		<input type="submit" value"Entrar">
	</form>
	<br>
	<form action="./registro.php">
		<input type="submit" placeholder="Registrarse" value="Registrarse">
	</form>

</body>
</html>