<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login Base de Datos</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>

	<form action="./validar.php" method="POST">
		<h2>Autenticación de usuario</h2>
        	<input type="text" name="usuario" placeholder="&#128272;Usuario"><br> <!--Para poner el candado-->
         	<input type="password" name="clave"  placeholder="&#128272; Contraseña"><br>
		<input type="submit" value"Entrar">
	</form>

</body>
</html>