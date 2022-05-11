<?php
include 'bd.php';
$bd = new bd;
// si he enviado un ciclista para modificar cojo su dorsal, en caso contrario muestro el primero
if (isset($_GET['X'])){$dorsal=$_GET['X'];} else {$dorsal=$bd->getPrimero();}  
$datos=$bd->getCiclista($dorsal);
$equipos=$bd->getEquipos($datos[3]);
// muestro el formulario
?>

<html>
		<center><h1> Actualiza los datos</h1></center>
        <form id="formuciclista" action="modi.php" method="post">
            <div>
               <input type="hidden" name="dorsal" id="dorsal" value="<?php echo $datos[0]; ?>"/><br/><br/> 
               Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $datos[1]; ?>"/><br/><br/>
               
               Edad:   <input type="text" name="edad" id="edad" value="<?php echo $datos[2]; ?>"/><br/><br/> 
               Equipo: <select name="equipo" id="equipo">
               <?php
                 echo '<option selected value="' . $datos[3] . '">'. $datos[3] .'</option>';
                 if (isset($equipos))
                 {
                   foreach($equipos as $row2)
                     echo '<option value="' . $row2['nomeq'] . '">'. $row2['nomeq'] .'</option>';               
                 }
                ?>
               </select><br/><br/> 
               <button type="submit">Enviar</button>
            </div>
        </form>
	</div>

</body>
</html>