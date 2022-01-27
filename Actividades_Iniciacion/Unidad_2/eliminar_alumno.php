<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar alumno</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Nombre: <input type="text" name="nombre">
	Apellidos: <input type="text" name="apellidos">
	DNI: <input type="number" name="dni_alum">
	<input type="submit" value="Eliminar alumno">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['nombre'], $_POST['apellidos'], $_POST['dni_alum'])){
		
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$dni_alum = $_POST['dni_alum'];
		$eliminar = "DELETE FROM alumnos WHERE nombre= '$nombre' AND apellidos= '$apellidos' AND dni_alum= '$dni_alum'";
		
		$resultado = mysqli_query($conexion, $eliminar);
		
		if($conexion->query($eliminar) === true){
			echo '<script language="javascript">';
			echo 'alert("Alumno eliminado correctamente")';
			echo '</script>';
			
		}else{
			die("Error al eliminar datos: " . $conexion->error);
		}
	}
?>

</body>
</html>