<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

class Empleado {

private $nombre;
private $sueldo;

public function inicializar ($nom, $din){

	$this -> nombre = $nom;
	$this -> sueldo = $din;

}

	public function imprimir (){

		if($this -> sueldo > 3000){
			echo 'Impuesto time, dude';
		}else{
			echo $this -> nombre + $this -> sueldo + ' No tiene que pagar impuestos';
		}

	}

}

$per1 = new Empleado();
$per1 -> inicializar('Jose',3500);
$per1 -> imprimir();


?>
</body>
</html>