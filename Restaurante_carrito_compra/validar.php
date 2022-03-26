<?php
	require_once("db.php");

	$usar_db = new DBControl();

	/*session_start();
	$_SESSION['user'] = $_POST['usuario'];
	$_SESSION['pass'] = $_POST['clave'];*/

	$conn = $usar_db->conectarDB();

	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$validar_login = $usar_db->validar("SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasena ='$clave' LIMIT 1");
	

	mysqli_free_result($validar_login);
	mysqli_close($conn);

?>