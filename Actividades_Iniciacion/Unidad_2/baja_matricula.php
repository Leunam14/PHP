<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar matrícula</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Codigo de matrícula: <input type="text" name="cod_matricula">
	<input type="submit" value="Eliminar matrícula">
</form>
<br>
<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['cod_matricula'])){
		
		$id = $_POST['cod_matricula'];
		$eliminar = "DELETE FROM matriculas WHERE cod_matricula= '$id'";
		$resultado = mysqli_query($conexion, $eliminar);
		
		if($conexion->query($eliminar) === true){
			echo '<script language="javascript">';
			echo 'alert("Matrícula eliminada correctamente")';
			echo '</script>';
			
		}else{
			die("Error al eliminar datos: " . $conexion->error);
		}
	}
?>

</body>
</html>