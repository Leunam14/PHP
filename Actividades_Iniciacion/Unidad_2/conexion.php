<?php

	$servidor = "localhost";
	$nombreusuario = "root";
	$password = "root";
	$tabla = "tol2";
	
	$conexion = new mysqli($servidor, $nombreusuario, $password, $tabla);

	
	if($conexion->connect_error){
		die("Conexión fallida: " . $conexion->connect_error);
	}

?>