<?php

	session_start();

	$servidor = "localhost";
	$nombreusuario = "root";
	$password = "root";
	$tabla = "tol2";
	
	$conexion = new mysqli($servidor, $nombreusuario, $password, $tabla);

	
	if($conexion->connect_error){
		die("Conexión fallida: " . $conexion->connect_error);
	}
		
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$tipo = $_POST['tipo']; //A eliminar si falla

	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' AND clave ='$clave' AND tipo='$tipo' LIMIT 1");

	if(mysqli_num_rows($validar_login) > 0){
			switch($tipo) {

				case "admin":
				header("Location: admin.php");
				break;

				case "prof":
				header("Location: profesor.php");
				break;

				case "tutor":
				header("Location: tutor.php");
				break;

				default:
				header("Location: index.php");
			}
	
	}else {
		echo '
			<script>
				alert("Credenciales no válidas");
			</script>
		';
		header("Location: index.php");
	}
	/*if(mysqli_num_rows($validar_login) > 0){
			$_SESSION['tipo'] = 'admin';
			header("Location: admin.php"); //a cambiar si falla a admin.php
			exit;
	}else {
		echo '
			<script>
				alert("Credenciales no válidas");
			</script>
		';
		header("Location: login.php");
	}*/


		//$resultado = $conexion->query($consulta);

            
	//$resultado= mysqli_query($conexion, $consulta);



//mysqli_free_result($resultado);
mysqli_close($conexion);
	