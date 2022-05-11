<?php

// $d0 = $_POST['dorsal'];
// $d1 = $_POST['nombre'];
// $d2 = $_POST['edad'];
// $d3 = $_POST['equipo'];
// $bd->setCiclista($d0,$d1,$d2,$d3);
// header("location:index.php");	     

include './bd.php';
$bd = new bd;

$dorsal = $_POST["dorsal"];
$equipo = $_POST["equipo"];

$res = $bd->setEquipo($dorsal, $equipo);

echo $res;








?>