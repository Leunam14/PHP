<?php
	include('./conexion.php');

	/*session_start();
	if(!isset($_SESSION['usuario'])){
		echo '
			<script>
				alert("Inicia sesión, por favor");
				window.location = "login.php";
			</script>
			';
		
		session_destroy();
		die();
	}*/


	$admin1 = "SELECT * FROM usuarios";
	$admin2 = "SELECT * FROM alumnos";
	$admin3 = "SELECT * FROM profesores";
	$admin4 = "SELECT * FROM modulos";
	//$profesor = "SELECT * FROM matriculas, asistencia";
	//$tutor = "SELECT * FROM asistencia";

?>
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Administrador</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="contenido_tabla">
		<div class="titulo">Datos de usuario</div>
		<div class="cabecera">Código</div>
		<div class="cabecera">Usuario</div>
		<div class="cabecera">Clave</div>
		<div class="cabecera">Tipo</div>
		<?php $resultado = mysqli_query($conexion, $admin1);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["cod"]; ?></div>
		<div class="info"><?php echo $row["usuario"]; ?></div>
		<div class="info"><?php echo $row["clave"]; ?></div>
		<div class="info"><?php echo $row["tipo"]; ?></div>
		
		
		<?php } ?>
		
</div>
		<center>
		<form action="aniadir_usuario.php" method="POST">
			<input type="submit" value="Añadir usuario">
		</form>
		<br>
		<form action="eliminar_usuario.php" method="POST">
			<input type="submit" value="Eliminar usuario">
		</form>
		</center>

<div class="contenido_tabla2">
		<div class="titulo2">Datos de alumnos</div>
		<div class="cabecera">Nombre</div>
		<div class="cabecera">Apellidos</div>
		<div class="cabecera">DNI alumnos</div>
		<?php $resultado = mysqli_query($conexion, $admin2);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["nombre"]; ?></div>
		<div class="info"><?php echo $row["apellidos"]; ?></div>
		<div class="info"><?php echo $row["dni_alum"]; ?></div>
		
		
		<?php } ?>
		
</div>

		<center>
		<form action="aniadir_alumno.php" method="POST">
			<input type="submit" value="Añadir alumno">
		</form>
		<br>
		<form action="eliminar_alumno.php" method="POST">
			<input type="submit" value="Eliminar alumno">
		</form>
		</center>

<div class="contenido_tabla2">
		<div class="titulo2">Datos de profesores</div>
		<div class="cabecera">Nombre</div>
		<div class="cabecera">Apellidos</div>
		<div class="cabecera">DNI profesor</div>
		<?php $resultado = mysqli_query($conexion, $admin3);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["nombre"]; ?></div>
		<div class="info"><?php echo $row["apellidos"]; ?></div>
		<div class="info"><?php echo $row["dni_prof"]; ?></div>
		
		
<?php } ?>
		
</div>

		<center>
		<form action="aniadir_prof.php" method="POST">
			<input type="submit" value="Añadir profesor">
		</form>
		<br>
		<form action="eliminar_prof.php" method="POST">
			<input type="submit" value="Eliminar profesor">
		</form>
		</center>

<div class="contenido_tabla2">
		<div class="titulo2">Datos de módulos</div>
		<div class="cabecera">Código módulo</div>
		<div class="cabecera">Descripción</div>
		<div class="cabeceras">DNI profesor</div>
		<?php $resultado = mysqli_query($conexion, $admin4);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["cod_modulo"]; ?></div>
		<div class="info"><?php echo $row["descripcion"]; ?></div>
		<div class="info"><?php echo $row["dni_prof"]; ?></div>
		
		
<?php } ?>
		
</div>

		<center>
		<form action="aniadir_modulo.php" method="POST">
			<input type="submit" value="Añadir modulo">
		</form>
		<br>
		<form action="eliminar_modulo.php" method="POST">
			<input type="submit" value="Eliminar modulo">
		</form>
		</center>
		<br>
		<br>
<center><h2><a href="index.php">Salir</a></h2></center>


</body>
</html>