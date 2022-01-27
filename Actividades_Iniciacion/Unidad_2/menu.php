<!doctype html>
<?php

include('./conexion.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>Añadir usuario</title>
<link href="estilos/estilos2.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Usuario: <input type="text" name="usuario">
	Clave: <input type="number" name="clave"> <!--Podría ponerlo password pero lo he dejado visible-->
	<br>
	Tipo: <select name="tipo">
			<option>admin</option>
			<option>prof</option>
			<option>tutor</option>
			</select>
	
	<!--<input type="text" name="tipo">-->
	<input type="submit" value="Añadir usuario">
</form>

<center><h2><a href="login.php">Volver</a></h2></center>

<?php
	if(isset($_POST['usuario'], $_POST['clave'], $_POST['tipo'])){
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];
		$tipo = $_POST['tipo'];
		
		$sql = "INSERT INTO usuarios(usuario, clave, tipo) VALUES ('$usuario', '$clave', '$tipo')";
		
		if($conexion->query($sql) === true){
			//echo 'Matrícula añadida correctamente';
			echo '<script language="javascript">';
			echo 'alert("Usuario añadido correctamente")';
			echo '</script>';
		}else{
			die("Error al añadir matrícula: " . $conexion->error);
		}
	}

?>

</body>
</html>