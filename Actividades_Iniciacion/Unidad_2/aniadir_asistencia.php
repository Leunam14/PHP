<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Añadir falta de asistencia</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Fecha: <input type="date" name="fecha">
	Código del módulo: <input type="text" name="cod_mod">
	DNI del alumno: <input type="number" name="dni_alum">
	<input type="submit" value="Añadir falta de asistencia">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['fecha'], $_POST['cod_mod'], $_POST['dni_alum'])){
		$fecha = $_POST['fecha'];
		$cod_mod = $_POST['cod_mod'];
		$dni_alum = $_POST['dni_alum'];
		
		$sql = "INSERT INTO asistencia(fecha, cod_modulo, dni_alum) VALUES ('$fecha', '$cod_mod', '$dni_alum')";
		
		if($conexion->query($sql) === true){
			echo '<script language="javascript">';
			echo 'alert("Falta de asistencia añadida correctamente")';
			echo '</script>';
			
		}else{
			die("Error al insertar datos: " . $conexion->error);
		}
	}

?>

</body>
</html>
