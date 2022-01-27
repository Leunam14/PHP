<!doctype html>
<?php

include('./conexion.php');
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Añadir coche</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="POST">
	Marca: <input type="text" name="marca">
	Modelo: <input type="text" name="modelo">
	Matricula: <input type="text" name="matricula">
	<input type="submit" value="Añadir nuevo coche">
</form>
<br>
<center><h2><a href="usuario.php">Volver</a></h2></center>


<?php
	
	if(isset($_POST['marca'], $_POST['modelo'], $_POST['matricula'])){
            
             if( empty($_POST['marca']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta la marca")';
				echo '</script>';
				exit();
			 }else{
				 $marca = $_POST['marca'];
			 }
            
            if( empty($_POST['modelo']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta el modelo")';
				echo '</script>';
				exit();
			}else{
				$modelo = $_POST['modelo'];
			}
			if( empty($_POST['matricula']) ){
                echo '<script language="javascript">';
				echo 'alert("Te falta la matricula")';
				echo '</script>';
				exit();
			 }else{
				$matricula = $_POST['matricula'];
			}
		
		$sql = "INSERT INTO coches(marca, modelo, matricula) VALUES ('$marca', '$modelo', '$matricula')";
		
		if($conexion->query($sql) === true){
			echo '<script language="javascript">';
			echo 'alert("Coche añadido correctamente")';
			echo '</script>';
			
		}else{
			die("Error al insertar datos: " . $conexion->error);
		}
	}
	
?>

</body>
</html>