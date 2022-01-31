<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	/*
	Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos. 
	Mostrar el menú en forma horizontal o vertical (según que método llamemos.
	*/
	class Menu{
		
		private $enlace = array();
		private $titulo = array();
		
		public function cargarOpcion ($en, $tit){
			
			$this -> enlace[] = $en;
			$this -> titulo[] = $tit;
		}
		
		public function mostrarHorizontal(){
			
			for($f = 0; $f < count($this -> enlace); $f++){
				echo '<a href="'.$this -> enlace[$f].'">'.$this -> titulo[$f].'</a>';
      		echo "-";
			}
		}
		
		public function mostrarVertical(){
			for($f=0; $f<count($this -> enlace); $f++){
			  echo '<a href="'.$this -> enlace[$f].'">'.$this -> titulo[$f].'</a>';
			  echo "<br>";
    		}
		}
		
	}
	
	$menu1 = new Menu;
	$menu1 -> cargarOpcion('www.mediavida.com', 'Mediavida');
	$menu1 -> cargarOpcion('www.google.es', 'Google');
	$menu1 -> cargarOpcion('www.youtube.com', 'YouTube');
	$menu1 -> mostrarHorizontal();
	$menu1 -> mostrarVertical();
	
	
?>

</body>
</html>