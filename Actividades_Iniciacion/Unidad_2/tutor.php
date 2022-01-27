<?php
	include("conexion.php");
	/*$admin = "SELECT * FROM usuarios, alumnos, profesores, modulos";
	$profesor = "SELECT * FROM matriculas, asistencia";*/
	
	/*session_start();		CUANDO SOLUCIONE ERROR DE SESIONES

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

	$tutor = "SELECT * FROM asistencia";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login tutor</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="contenido_tabla">
		<div class="titulo">Datos de asistencia</div>
		<div class="cabecera">Código de asistencia</div>
		<div class="cabecera">Fecha</div>
		<div class="cabecera">Código alumno</div>
		<div class="cabecera">Código módulo</div>
		<?php $resultado = mysqli_query($conexion, $tutor);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["cod_asistencia"]; ?></div>
		<div class="info"><?php echo $row["fecha"]; ?></div>
		<div class="info"><?php echo $row["cod_modulo"]; ?></div>
		<div class="info"><?php echo $row["dni_alum"]; ?></div>
		
		
		<?php } ?>
		
	</div>

<center><h2><a href="index.php">Salir</a></h2></center>

</body>
</html>