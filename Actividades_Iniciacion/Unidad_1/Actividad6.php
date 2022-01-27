<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actividad 6</title>
</head>

<body>

<?php
	
	$i = 1; 
	$valor= 5;
	do{
		if(($i % $valor == 0)) { 
		 echo $i . ' es múltiplo de 5<br>';

	   }
		$i ++;
	}
	while($i <= 100)
	  

?>	
</body>
</html>