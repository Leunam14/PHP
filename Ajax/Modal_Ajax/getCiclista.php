<?php 
include 'bd.php';
$bd = new bd;


$dorsal = $_GET["dorsal"];

$ciclista = $bd->getCiclista($dorsal);

echo json_encode($ciclista);