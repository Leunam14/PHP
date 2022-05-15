<?php
include 'bd.php';
$bd = new bd;

$equipos = $bd->getEquipos();


echo json_encode($equipos);


?>

