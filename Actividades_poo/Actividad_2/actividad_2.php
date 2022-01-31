<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	class Menu{
		
		private $enlaces = array();
		private $titulos = array();
		
		public function cargarOpcion($en, $tit){
			
			$this -> enlaces[] = $en; //Almacenará la url
			$this -> titulos[] = $tit; //Almacenará el nombre que se va a mostrar en pantalla
		}
		
		public function mostrar(){
			/*El método count se encarga de contar los elementos de dentro de un array*/
			for($f=0; $f<count($this -> enlaces); $f++){
      			echo '<a href="'.$this -> enlaces[$f].'">'.$this -> titulos[$f].'</a>';
      			echo '<br>';
    		}
		}
		
	}
		$menu1 = new Menu();
		$menu1 -> cargarOpcion('http://www.google.com','Google');
		$menu1 -> cargarOpcion('http://www.youtube.com','YouTube');
		$menu1 -> cargarOpcion('http://www.mediavida.com','Mediavida');
		$menu1 -> mostrar();
?>
</body>
</html>