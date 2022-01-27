<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Añadir nuevo módulo</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Código módulo: <input type="number" name="cod_mod">
	Descripcion: <input type="text" name="descripcion">
	DNI del profesor: <input type="number" name="dni_prof">
	<input type="submit" value="Añadir módulo">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['cod_mod'], $_POST['descripcion'], $_POST['dni_prof'])){
		$cod_mod = $_POST['cod_mod'];
		$descripcion = $_POST['descripcion'];
		$dni_prof = $_POST['dni_prof'];
		
		$sql = "INSERT INTO modulos(cod_modulo, descripcion, dni_prof) VALUES ('$cod_mod', '$descripcion', '$dni_prof')";
		
		if($conexion->query($sql) === true){
			echo '<script language="javascript">';
			echo 'alert("Módulo añadido correctamente")';
			echo '</script>';
			
		}else{
			die("Error al insertar datos: " . $conexion->error);
		}
	}

?>

</body>
</html>
