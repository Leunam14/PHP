<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Añadir alumno</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Nombre: <input type="text" name="nombre">
	Apellidos: <input type="text" name="apellidos">
	DNI del alumno: <input type="number" name="dni_alum">
	<input type="submit" value="Añadir nuevo alumno">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['nombre'], $_POST['apellidos'], $_POST['dni_alum'])){
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$dni_alum = $_POST['dni_alum'];
		
		$sql = "INSERT INTO alumnos(nombre, apellidos, dni_alum) VALUES ('$nombre', '$apellidos', '$dni_alum')";
		
		if($conexion->query($sql) === true){
			echo '<script language="javascript">';
			echo 'alert("Alumno añadido correctamente")';
			echo '</script>';
			
		}else{
			die("Error al insertar datos: " . $conexion->error);
		}
	}

?>

</body>
</html>