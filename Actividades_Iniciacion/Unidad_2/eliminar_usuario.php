<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar usuario</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Código de usuario: <input type="text" name="cod">
	<input type="submit" value="Eliminar usuario">
</form>

<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['cod'])){
		
		$id = $_POST['cod'];
		$eliminar = "DELETE FROM usuarios WHERE cod = '$id'";
		$resultado = mysqli_query($conexion, $eliminar);
		
		if($conexion->query($eliminar) === true){
			echo '<script language="javascript">';
			echo 'alert("Usuario eliminado correctamente")';
			echo '</script>';
			
		}else{
			die("Error al eliminar usuario: " . $conexion->error);
		}
	}
?>