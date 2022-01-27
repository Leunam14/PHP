<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Alta matrícula</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	DNI alumno: <input type="text" name="dni_alum">
	Código de módulo: <input type="number" name="cod_modulo">
	<input type="submit" value="Añadir matrícula">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>

<?php
	if(isset($_POST['dni_alum'], $_POST['cod_modulo'])){
		$dni_alum = $_POST['dni_alum'];
		$cod_modulo = $_POST['cod_modulo'];
		
		$sql = "INSERT INTO matriculas(dni_alum, cod_modulo) VALUES ('$dni_alum', '$cod_modulo')";
		
		if($conexion->query($sql) === true){
			//echo 'Matrícula añadida correctamente';
			echo '<script language="javascript">';
			echo 'alert("Matrícula añadida correctamente")';
			echo '</script>';
		}else{
			die("Error al añadir matrícula: " . $conexion->error);
		}
	}

?>

</body>
</html>





