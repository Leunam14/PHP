<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
/*Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda.*/
	

/**
 * Clase cabeceraPagina donde se va a encontrar todos los atributos y métodos que van a mostrar el título
 * [Description CabeceraPagina]
 */
	class CabeceraPagina{
		
		private $ubicacion;
		private $titulo;
		
		/**
		 * Función que se encarga de inicializar
		 * @param mixed $ubi
		 * @param mixed $tit
		 * 
		 * @return [type]
		 */
		public function inicializar($ubi, $tit){
			
			$this -> ubicacion = $ubi;
			$this -> titulo = $tit;
		}
		
		/**
		 * Función que se encarga de dar formato al contenido
		 * @return [type]
		 */
		public function graficar(){
			
			echo '<div style="font-size:40px; text-align:'.$this -> ubicacion.'">';
			echo $this -> titulo;
			echo '</div>';
		}
		
	}
	//Se llaman a las funciones y se les da uso
	$cabecera = new CabeceraPagina();
	$cabecera -> inicializar('center','El blog de Leunam');
	$cabecera -> graficar();
	
?>

</body>
</html>