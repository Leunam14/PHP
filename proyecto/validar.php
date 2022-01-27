<?php
	session_start();
	/*$_SESSION['user'] = $_POST['usuario'];
	$_SESSION['pass'] = $_POST['clave'];*/

	$servidor = "localhost";
	$nombreusuario = "root";
	$password = "root";
	$tabla = "proyecto_autoescuela";
	
	$conexion = new mysqli($servidor, $nombreusuario, $password, $tabla);

	
	if($conexion->connect_error){
		die("Conexión fallida: " . $conexion->connect_error);
	}

	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	/*$usuario = $_SESSION['user'];
	$clave = $_SESSION['pass'];*/ //var_dump() --> A probar para cuando termine el examen.

	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' AND clave ='$clave' LIMIT 1");
	
	if(mysqli_num_rows($validar_login) > 0){ 
			//$_SESSION['logueado'] = 1;
			header("Location: usuario.php");
			exit();
	}else {
		
		header("Location: index.php");
	}

	mysqli_free_result($validar_login);
	mysqli_close($conexion);

?>