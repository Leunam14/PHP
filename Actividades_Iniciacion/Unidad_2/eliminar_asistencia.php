<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar falta de asistencia</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Codido asistencia: <input type="text" name="cod_asistencia">
	<input type="submit" value="Eliminar falta de asistencia">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['cod_asistencia'])){
		
		$id = $_POST['cod_asistencia'];
		$eliminar = "DELETE FROM asistencia WHERE cod_asistencia= '$id'";
		$resultado = mysqli_query($conexion, $eliminar);
		
		if($conexion->query($eliminar) === true){
			echo '<script language="javascript">';
			echo 'alert("Falta de asistencia eliminada correctamente")';
			echo '</script>';
			
		}else{
			die("Error al eliminar datos: " . $conexion->error);
		}
	}
?>

</body>
</html>