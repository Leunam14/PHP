<?php
session_start();
require_once("db.php");

$usar_db = new DBControl();

$conn = $usar_db->conectarDB();

$ids = implode( ', ', array_keys($_SESSION['products']));
$sql = $usar_db->query("SELECT * FROM comidas WHERE id IN ($ids);");

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
					<th>Total</th>

				</thead>

				<tbody>
				
					<tr style="width: 600px;">

						<td style="width: 100px;"><?php echo $datos; ?></td>

						<td style="width: 300px;"><?php echo $descripcion; ?> |
						<?php echo $precio; ?> €

						</td>

					</tr> 

				</tbody>
				
			</table>
			
		</div>
		
	</main>
	
</body>
</html>