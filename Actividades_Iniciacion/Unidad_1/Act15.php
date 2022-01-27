<?php

$valor1 = $_POST['nombre'];
$valor2 = $_POST['apellidos'];
$valor3 = $_POST['fecha'];

$valor3 = new DateTime($valor3);
$hoy = new DateTime();
$edad = $hoy->diff($valor3);



echo $valor1. " " .$valor2." y tiene " .$edad->y ." años"; 


?>