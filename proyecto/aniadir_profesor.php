<!doctype html>
<?php

include('./conexion.php');
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Añadir profesor</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Nombre: <input type="text" name="nombre">
	Apellidos: <input type="text" name="apellidos">
	DNI del profesor: <input type="number" name="dni_prof">
	<input type="submit" value="Añadir nuevo profesor">
</form>
<br>
<center><h2><a href="usuario.php">Volver</a></h2></center>


<?php
	if(isset($_POST['nombre'], $_POST['apellidos'], $_POST['dni_prof'])){ //nos permite evaluar si una variable está definida o no.
            // Nombre:
             if( empty($_POST['nombre']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el nombre")';
				echo '</script>';
				exit();
			 }else{
				 $nombre = $_POST['nombre'];
			 }
            // Apellidos:
            if( empty($_POST['apellidos']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el apellido")';
				echo '</script>';
				exit();
			}else{
				$apellidos = $_POST['apellidos'];
			}
			if( empty($_POST['dni_prof']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el dni")';
				echo '</script>';
				exit();
			 }else{
				$dni_prof = $_POST['dni_prof'];
			}
		
		$sql = "INSERT INTO profesores(nombre, apellidos, dni_prof) VALUES ('$nombre', '$apellidos', '$dni_prof')";
		
		if($conexion->query($sql) === true){
			echo '<script language="javascript">';
			echo 'alert("Profesor añadido correctamente")';
			echo '</script>';
			
		}else{
			die("Error al insertar datos: " . $conexion->error);
		}
	}
		
	

?>

</body>
</html>