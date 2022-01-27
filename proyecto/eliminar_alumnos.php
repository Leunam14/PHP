<!doctype html>
<?php

include('./conexion.php');
session_start();
$alumnos = "SELECT matricula FROM coches";
$alumnos2 = "SELECT dni_prof FROM profesores";
$res = $conexion->query($alumnos);
$res2 = $conexion->query($alumnos2);
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
	DNI del profesor: <select name="dni_prof"><!--<input type="number" name="dni_prof">-->
		<?php
			if(isset($res2)){
				foreach($res2 as $row){
					echo '<option>'.$row['dni_prof'].'</option>';
					}
			}
		?>
	</select>
	
	Matricula: <select name="matricula">
		<?php
			if(isset($res)){
				foreach($res as $row){
					echo '<option>'.$row['matricula'].'</option>';
					}
			}
		?>
	</select>
	<input type="submit" value="Eliminar alumno">
</form>
<br>
<center><h2><a href="usuario.php">Volver</a></h2></center>


<?php
	if(isset($_POST['nombre'], $_POST['apellidos'], $_POST['dni_alum'], $_POST['dni_prof'], $_POST['matricula'])){
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
			if( empty($_POST['dni_alum']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el dni")';
				echo '</script>';
				exit();
			 }else{
				$dni_alum = $_POST['dni_alum'];
			}
			if( empty($_POST['dni_prof']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el dni")';
				echo '</script>';
				exit();
			 }else{
				$dni_prof = $_POST['dni_prof'];
			}
			if( empty($_POST['matricula']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta la matricula")';
				echo '</script>';
				exit();
			 }else{
				$matricula = $_POST['matricula'];
			}
		
		$eliminar = "DELETE FROM alumnos WHERE nombre= '$nombre' AND apellidos= '$apellidos' AND dni_alum= '$dni_alum' AND matricula= '$matricula' AND dni_prof= '$dni_prof'";
				
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