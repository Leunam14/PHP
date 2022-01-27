<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar módulo</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Codido módulo: <input type="text" name="cod_mod">
	<input type="submit" value="Eliminar módulo">
</form>

<center><h2><a href="index.php">Volver</a></h2></center>


<?php
	if(isset($_POST['cod_mod'])){
		
		$id = $_POST['cod_mod'];
		$eliminar = "DELETE FROM modulos WHERE cod_modulo= '$id'";
		$resultado = mysqli_query($conexion, $eliminar);
		
		if($conexion->query($eliminar) === true){
			echo '<script language="javascript">';
			echo 'alert("Módulo eliminado correctamente")';
			echo '</script>';
			
		}else{
			die("Error al eliminar datos: " . $conexion->error);
		}
	}
?>