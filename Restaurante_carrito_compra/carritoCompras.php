<?php

require_once("db.php");

$usar_db = new DBControl();
$conn = $usar_db->conectarDB();
session_start();

if(!isset($_SESSION["carrito"])) { //Si no está la variable sesión carrito, se crea. Es un array asociativo.
	$_SESSION["carrito"] = [];	
}

if($_SERVER["REQUEST_METHOD"] == "POST") { /*Para que no me diera error al meterme en el carrito sin 
 sin enviar un método post.*/
	$_SESSION["carrito"][] = $_POST;
}

// echo '<pre>';
// var_dump($_SESSION["carrito"]); 	-->		Lo he usado para testear
// echo '<pre>';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<title>Carrito de compras</title>
</head>

<body>

	<header class="row">
		<nav class="col-12 navbar navbar-expand-md navbar-light bg-info text-white">
				
		  <h1>Carrito de compras</h1>
				
		</nav>	
	</header>
	
	
	<main>
		<br>
		<div align="center">
			<h3>PRODUCTOS</h3>
			<a href="pagina_principal.php">
				<img src="imagenes/carrito.png" width="50px;">
			</a>
			<hr>
		

			<table style="width: 600px;">

				<thead>

					<th>ID</th>
					<th>Descripcion</th>
					<th>Precio</th>

				</thead>

				<tbody>
				<?php
				$total = 0;
				//
					foreach($_SESSION["carrito"] as $producto)://Con un bucle foreach recorro el carrito
						$total += intVal($producto["textPrecio"]) /*He convertido el string en int para
									que pudiera sumar la cantidad del precio*/
				?>
					 <tr>
						  <td><a href="product_details?product_id=<?php echo $producto['txtId'];?>"><?php echo $producto['txtDescripcion']; ?></a></td>
						  <td><?php echo $producto['txtDescripcion']; ?></td>
						  <td><?php echo $producto['textPrecio']; ?>  €</td>
					 </tr>
				<?php endforeach; ?>

				</tbody>
				
			</table>
			<p>Total: <?php echo $total;?> €</p>
			
		</div>
		
	</main>
	
</body>
</html>