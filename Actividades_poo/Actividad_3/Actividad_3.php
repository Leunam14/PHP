<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
/*Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda.*/
	
	class CabeceraPagina{
		
		private $ubicacion;
		private $titulo;
		
		public function inicializar($ubi, $tit){
			
			$this -> ubicacion = $ubi;
			$this -> titulo = $tit;
		}
		
		public function graficar(){
			
			echo '<div style="font-size:40px; text-align:'.$this -> ubicacion.'">';
			echo $this -> titulo;
			echo '</div>';
		}
		
	}
	
	$cabecera = new CabeceraPagina();
	$cabecera -> inicializar('center','El blog de Leunam');
	$cabecera -> graficar();
	
?>

</body>
</html>