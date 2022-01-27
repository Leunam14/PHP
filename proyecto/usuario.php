<?php
	
	session_start();

	/*if($_SESSION['logueado'] != 1){
    echo 'Usted no esta logueado';
	header('Location:./index.php');
    exit;
}
	if (isset($usuario)) {
        echo "Bienvenido " . $_SESSION['usuario'];
    } else {
        echo "No tiene permitido visitar esta página.";
		header('Location:./index.php');
		exit();
    }*/

	include("conexion.php");

	$profesor = "SELECT * FROM profesores";
	$coches = "SELECT * FROM coches";
	$alumnos = "SELECT * FROM alumnos";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login usuario</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>
	
	<div class="contenido_tabla">
			<div class="titulo">PROFESORES</div>
			<div class="cabecera">Nombre</div>
			<div class="cabecera">Apellidos</div>
			<div class="cabecera">DNI</div>

			<?php $resultado = mysqli_query($conexion, $profesor);
			while($row=mysqli_fetch_assoc($resultado)) { ?>
			<!--Devuelve un array asociativo que corresponde a la fila recuperada-->
			<div class="info"><?php echo $row["nombre"]; ?></div>
			<div class="info"><?php echo $row["apellidos"]; ?></div>
			<div class="info"><?php echo $row["dni_prof"]; ?></div>

			<?php } ?>

	</div>
	
		<center>
		<form action="aniadir_profesor.php" method="POST">
			<input type="submit" value="Añadir nuevo profesor">
		</form>
		<br>
		<form action="eliminar_profesor.php" method="POST">
			<input type="submit" value="Eliminar nuevo profesor">
		</form>
		</center>
		
		
	<div class="contenido_tabla">
		
		<div class="titulo">Datos de coches</div>
		<div class="cabecera">Marca</div>
		<div class="cabecera">Modelo</div>
		<div class="cabecera">Matrícula</div>
		<?php $resultado = mysqli_query($conexion, $coches);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["marca"]; ?></div>
		<div class="info"><?php echo $row["modelo"]; ?></div>
		<div class="info"><?php echo $row["matricula"]; ?></div>
		<?php } ?>
	</div>
	<center>
		<form action="aniadir_coche.php" method="POST">
			<input type="submit" value="Dar de alta nuevo coche">
		</form>
		<br>
		<form action="eliminar_coche.php" method="POST">
			<input type="submit" value="Dar de baja coche">
		</form>
	</center>
	
	<div class="contenido_tabla2">
		
		<div class="titulo2">Datos de alumnos</div>
		<div class="cabecera">Nombre</div>
		<div class="cabecera">Apellidos</div>
		<div class="cabecera">DNI</div>
		<div class="cabecera">Coche</div>
		<div class="cabecera">DNI Prof</div>
		<?php $resultado = mysqli_query($conexion, $alumnos);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
		
		<div class="info"><?php echo $row["nombre"]; ?></div>
		<div class="info"><?php echo $row["apellidos"]; ?></div>
		<div class="info"><?php echo $row["dni_alum"]; ?></div>
		<div class="info"><?php echo $row["matricula"]; ?></div>
		<div class="info"><?php echo $row["dni_prof"]; ?></div>
		<?php } ?>
	</div>
	<center>
		<form action="aniadir_alumnos.php" method="POST">
			<input type="submit" value="Añadir alumnos">
		</form>
		<br>
		<form action="eliminar_alumnos.php" method="POST">
			<input type="submit" value="Eliminar alumnos">
		</form>
	
	<br>
	<h2><a href="cerrar_sesion.php">Salir</a></h2></center>
<body>
</body>
</html>