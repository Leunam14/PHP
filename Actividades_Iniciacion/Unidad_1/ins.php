<?php

$url = "insertar.php";
$nom = $_POST['A1'];
$ape = $_POST['A2'];
$edad = $_POST['A3'];

$sql = "Insert into pruebas values (0, $nom, $ape, $edad)";

$con = new mysqli ('localhost', 'dwes', 'dwes', 'presencialdwes');

$res = $con -> query($sql);

if ($res) {
    header('location: '.$url);
    die();
}

?>