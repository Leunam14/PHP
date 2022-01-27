<!doctype html>
<?php

include('./conexion.php');
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar profesor</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Nombre: <input type="text" name="nombre">
	Apellidos: <input type="text" name="apellidos">
	DNI: <input type="number" name="dni_prof">
	<input type="submit" value="Eliminar profesor">
</form>
<br>
<center><h2><a href="usuario.php">Volver</a></h2></center>


<?php
	
	if(isset($_POST['nombre'], $_POST['apellidos'], $_POST['dni_prof'])){
            
             if( empty($_POST['nombre']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el nombre")';
				echo '</script>';
				exit();
			 }else{
				 $nombre = $_POST['nombre'];
			 }
            
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
	
		$eliminar = "DELETE FROM profesores WHERE nombre= '$nombre' AND apellidos= '$apellidos' AND dni_prof='$dni_prof'";
		
		//$resultado = mysqli_query($conexion, $eliminar);
		
		if($conexion->query($eliminar) === true){
			echo '<script language="javascript">';
			echo 'alert("Profesor eliminado correctamente")';
			echo '</script>';
			
		}else{
			die("Error al eliminar datos: " . $conexion->error);
		}
	}
?>

</body>
</html>