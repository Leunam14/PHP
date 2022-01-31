<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
/*Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente.*/
	
	class CabeceraPagina{
		
		private $titulo;
		private $ubicacion;
		private $fondo;
		private $fuente;
		
		public function inicializar($tit, $ubi, $fon, $fue){
			
			$this -> titulo = $tit;
			$this -> ubicacion = $ubi;
			$this -> fondo = $fon;
			$this -> fuente = $fue;
			
		}
		
		public function graficar(){
			
			echo '<div style="font-size:50px; text-align:'.$this -> ubicacion.'; color:'.$this -> fuente.'; background-color:'.$this -> fondo.'">';
			echo $this -> titulo;
			echo '</div>';
		}
		
	}
	
	$informacion = new CabeceraPagina();
	$informacion -> inicializar('El blog de Leunam', 'right', 'purple', 'grey');
	$informacion -> graficar();
	
?>

</body>
</html>