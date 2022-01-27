<?php
	include("conexion.php");
	//$admin = "SELECT * FROM usuarios, alumnos, profesores, modulos";
	
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



	$profesor = "SELECT * FROM asistencia";
	$profesor2 = "SELECT * FROM matriculas";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login profesores</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="contenido_tabla">
		<div class="titulo">Datos de asistencia</div>
		<div class="cabecera">Código de asistencia</div>
		<div class="cabecera">Fecha</div>
		<div class="cabecera">Código alumno</div>
		<div class="cabecera">Código módulo</div>
		<?php $resultado = mysqli_query($conexion, $profesor);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["cod_asistencia"]; ?></div>
		<div class="info"><?php echo $row["fecha"]; ?></div>
		<div class="info"><?php echo $row["cod_modulo"]; ?></div>
		<div class="info"><?php echo $row["dni_alum"]; ?></div>
		
		<?php } ?>
		
	</div>
		<center>
		<form action="aniadir_asistencia.php" method="POST">
			<input type="submit" value="Añadir falta de asistencia">
		</form>
		<br>
		<form action="eliminar_asistencia.php" method="POST">
			<input type="submit" value="Eliminar falta de asistencia">
		</form>
		</center>
		
	<div class="contenido_tabla2">
		
		<div class="titulo2">Datos de matrícula</div>
		<div class="cabecera">Código de matrícula</div>
		<div class="cabecera">DNI alumno</div>
		<div class="cabecera">Código módulo</div>
		<?php $resultado = mysqli_query($conexion, $profesor2);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["cod_matricula"]; ?></div>
		<div class="info"><?php echo $row["dni_alum"]; ?></div>
		<div class="info"><?php echo $row["cod_modulo"]; ?></div>
		<?php } ?>
	</div>
	<center>
		<form action="alta_matricula.php" method="POST">
			<input type="submit" value="Dar de alta matrícula">
		</form>
		<br>
		<form action="baja_matricula.php" method="POST">
			<input type="submit" value="Dar de baja matrícula">
		</form>
	</center>

<center><h2><a href="index.php">Salir</a></h2></center>

</body>
</html>