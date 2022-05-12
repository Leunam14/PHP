<?php
    // require_once 'db.php';

    // $usar_db = new DBControl();

    // $conn = $usar_db->conectarDB();

    // $nombre = $_POST['A0']; 
    // $apellido = $_POST['A1'];
    // $cantidad = $_POST['A2'];
    // $telefono = $_POST['A3'];
    // $direccion = $_POST['A4'];
    // $descripcion = $_POST['A00'];

    // $sql = "INSERT INTO pedidos(nombre, apellidos, cantidad, telefono, direccion, descripcion) VALUES ('$nombre', '$apellido', '$cantidad', '$telefono', '$direccion', '$descripcion')";
    
    // $cambios = $conn->query($sql);     
    
    include './bd.php';

    $bd = new bd;

    // $dorsal = $_POST["dorsal"];
    // $equipo = $_POST["equipo"];

    $nombre = $_POST['A0']; 
    $apellido = $_POST['A1'];
    $cantidad = $_POST['A2'];
    $telefono = $_POST['A3'];
    $direccion = $_POST['A4'];
    $descripcion = $_POST['A00'];

    $sql = "INSERT INTO pedidos(nombre, apellidos, cantidad, telefono, direccion, descripcion) VALUES ('$nombre', '$apellido', '$cantidad', '$telefono', '$direccion', '$descripcion')";


    $res = $bd->setDatos($nombre, $apellido, $cantidad, $telefono, $direccion, $descripcion);

    echo $res;

?>