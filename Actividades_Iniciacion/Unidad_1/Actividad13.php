<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actividad 13</title>
</head>

<body>

<?php
		
	if ($gestor = opendir('/php/ud1/fotos')){
		echo "<table border=1>" . "<tr>";
		$i=0;
		
		while (false !== ($imagen = readdir($gestor))){
			
			if ($imagen!="." && $imagen!=".."){
				
				if ($i==4){
					
					$i=0;
					echo "</tr>" . "<tr>";
					
				}
			
			$i++;             
			echo "<td>" . "<a href=/ud1/fotos/$imagen><img src='/ud1/fotos/$imagen' width=100 height=100></img></a>" . "</td>";
		}
	}
		echo "</tr>" . "</table>";   
		closedir($gestor);
	}
?>

</body>
</html>