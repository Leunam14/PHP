<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>


<?php

	class Persona {
		
		private $nombre;
		
		public function inicializar ($nom){
			
			$this -> nombre = $nom;
			
		}
		
		public function imprimir (){
			
			echo $this -> nombre;
			echo '<br>';
		}
	}
	
	$per1 = new Persona();
		
	$per1 -> inicializar('Jose');
		
	$per1 -> imprimir();
	
?>




</body>
</html>