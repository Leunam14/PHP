<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actividad 12</title>
</head>

<body>

<?php
	
	$numero = $_POST['dia'];
	
		
	switch($numero){
			
		case 1: 
			echo "Hoy es Lunes";
			break;
		case 2: 
			echo "Hoy es Martes";
			break;
		case 3: 
			echo "Hoy es Miércoles";
			break;
		case 4:
			echo "Hoy es Jueves";
			break;
		case 5: 
			echo "Hoy es Viernes";
			break;
		case 6: 
			echo "Hoy es Sábado";
			break;
		case 7: 
			echo "Hoy es Domingo";
			break;
	}
	
?>

</body>
</html>