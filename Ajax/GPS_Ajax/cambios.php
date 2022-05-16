<?php    
    require_once("bd.php");
    $bd = new bd;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cantidad = $_POST['cantidad'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $query = $bd->query("INSERT INTO pedidos(nombre, apellidos, cantidad, telefono, direccion, descripcion) VALUES ('$nombre', '$apellido', '$cantidad', '$telefono', '$direccion', '$descripcion')");

    


?>