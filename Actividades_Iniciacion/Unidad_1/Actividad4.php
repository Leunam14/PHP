<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

$valor = 5;
	
for($i=1; $i < 100; $i++){
      if(fmod($i, $valor)){
		  continue;
      }
      echo $i . ' es multiplo de 5<br>';
   }
	
?>
</body>
</html>