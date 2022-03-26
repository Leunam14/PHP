<?php
session_start();
require_once("db.php");

$usar_db = new DBControl();

$conn = $usar_db->conectarDB();

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<title>Selección comidas</title>
</head>

<body>

	<header class="row">
	
		<nav class="col-12 navbar navbar-expand-md navbar-light bg-info text-white">
				
		  <h1>Página principal</h1>
	
		</nav>
			
	</header>

	<main>
		<br>
		<div align="center">
			<h3>PRODUCTOS</h3>
			<a href="carritoCompras.php">
				<img src="imagenes/carrito.png" width="50px;">
			</a>
			<hr>
			
		<?php
        
        $query = $usar_db->query("SELECT * FROM comidas ORDER BY id ASC LIMIT 10");
        if($query->num_rows > 0){ // Si la query es mayor que cero(hay resultados), se mete en el if
            //while($row = $query->fetch_assoc()){
			while ($producto = mysqli_fetch_array($query)) {//Mete dentro de la variable lo encontrado en la query
        ?>
			
		<table style="width: 600px;">
		
		<thead>
		
			<th>ID</th>
			<th>Producto</th>
			<th>Descripción</th>
			<th>Comprar</th>
			
		</thead>
		
		<tbody>
		
			<tr style="width: 600px;">
				<td style="width: 100px;">
					<?php echo $producto["id"]; ?> <!--Imprime en pantalla el id dentro de la variable producto-->
				</td>
				
				<td style="width: 100px;">
			
					<img src="<?php echo substr($producto["foto"],2); ?>" width="100px" height="100px">
					
				</td>
				
				<td style="width: 300px;">
					<?php echo $producto["descripcion"]; ?> |
					<?php echo $producto["precio"]; ?> €	
				</td>
				
				<td style="width: 300px;">
				
				<!--<button onclick="window.location.href='carritoCompras.php?product_id= <?php //echo $producto['id']; echo $producto['descripcion']; echo $producto['precio']; ?> '" > Agregar al carrito </button>-->

					<form action="carritoCompras.php" method="POST">
						<!--Formulario que registra los valores una vez pulsado el botón submit-->
						<input type="hidden" name="txtId" value="<?php echo $producto["id"]; ?>">
						<input type="hidden" name="txtDescripcion" value="<?php echo $producto["descripcion"]; ?>">
						<input type="hidden" name="textPrecio" value="<?php echo $producto["precio"]; ?>">
						<input type="submit" value="Agregar" name"btnAgregar">
						
						
					
					</form>
				
				</td>
				
			</tr>
			
		</tbody>
		
		
		</table>
		<?php } }else{ ?>
        <p>Producto no encontrado tralala.....</p>
        <?php } ?>
		</div>
		
		<br>
		<form action="./cerrar_sesion.php">
		<input type="submit" value="CERRAR SESIÓN">
		</form>
		<br>
	</main>
	
	<footer class="footer">
      	
      	<section class="row">
      		<article class="col-12  bg-info text-white ">
   			  <h3 align="center">José Manuel Martínez Romera</h3>
      		</article>
      		
      		<article class="col-12 bg-info text-white">
   			  <h4 align="center">Módulo: DEWES</h4>
      		</article>
      		
      	</section>

    </footer>
    

	
</body>

</html>
