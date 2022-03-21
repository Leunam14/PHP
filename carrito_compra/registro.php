<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login Base de Datos</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
	<br>
	<form action="./crear_usuario.php" method="POST">
		<h2>Registro de usuario</h2>
      		DNI
       		<input type="text" name="dni" placeholder="48578948K"><br>
       		Nombre
       		<input type="text" name="nombre" placeholder="Jose Manuel"><br>
       		Apellidos
       		<input type="text" name="apellidos" placeholder="Martínez Romera"><br>
       		Dirección
       		<input type="text" name="direccion" placeholder="Calle Sirenas"><br>
       		Usuario
        	<input type="text" name="usuario" placeholder="Usuario"><br>
        	Contraseña
         	<input type="password" name="clave"  placeholder="&#128272; Contraseña"><br>
		<input type="submit" value"Entrar">
	</form>
	<br>
	<h2><a href="index.php">Volver</a></h2></center>


</body>
</html>