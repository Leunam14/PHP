<?php
require_once("db.php");

$usar_db = new DBControl();

$conn = $usar_db->conectarDB();

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if(empty($_POST['dni']) || empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['direccion']) || empty($_POST['usuario']) || empty($_POST['clave'])){
	
	header("Location: registro.php");
	
}else{
	
	$crear_usuario = $usar_db->crearUsuario("INSERT INTO usuario(dni, nombre, apellidos, direccion, usuario, contrasena) VALUES ('$dni', '$nombre', '$apellidos', '$direccion', '$usuario', '$clave')");
}



?>

