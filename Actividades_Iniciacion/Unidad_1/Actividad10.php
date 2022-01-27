<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actividad 10</title>
</head>

<body>
<?php

define( "TAM", 10 );
$blanco = "white";
$gris = "grey";
$linea = 0;
	
for ( $i = 1; $i <= 100; $i++ ) {
	echo $i . " ";
	if ( $i % TAM == 0 ) {
		echo '<div style="Color:' . ($linea % 2 == 0 ? $blanco : $gris) . '"</div>';
		$linea++;
	}
}
?>

</body>
</html>