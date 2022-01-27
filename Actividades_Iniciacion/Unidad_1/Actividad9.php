<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<h1>Número par/impar</h1>

<?php
	
if($nu= $_POST["num"]){
	
	if ($nu % 2 == 0){

		echo "<br>El <b>$nu</b> es par";

	}else{

		echo "<br>El <b>$nu</b> es impar";
	}
}

?>
<form action="#" method="post">
   <p>Escribe un número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Enviar" /></p>
</form>



</body>
</html>