<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actividad 8</title>
</head>

<body>

<h1>Tabla de multiplicar</h1>
<h3>Escribe un número entre el 1-10</h3>
<form action="#" method="post">
   <p>Escribe un número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Enviar" /></p>
</form>

<?php
	
$num= $_POST['num'];
	
	if ($num<1 or $num>10) {
		
		echo "Tiene que ser un número entre el 1-10";
		}
	else {
		
		 echo "<b>Tabla del $num: <br></b>";
		 
		$i=1;
		
		 while ($i<=10) {
			 
			   echo "<br> $num x $i = " .$num*$i;
			   $i++;
			   } 
		 }
?>

</body>
</html>