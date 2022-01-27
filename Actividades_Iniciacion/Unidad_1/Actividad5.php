<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Multiplo 5 con while</title>
</head>

<body>

<?php
	
	$i = 1; 
	$valor= 5;
	
	while($i <= 100){
	   if(($i % $valor == 0)) { 
		 echo $i . ' es múltiplo de 5<br>';

	   }
		$i ++;
	}
?>

</body>
</html>