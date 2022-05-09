<?php
class bd
{
  
	public function __construct()
	    {
		  $config = parse_ini_file('config.ini');
		  try 
		     {     
		       $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		       $dsn = 'mysql:host='.$config['server'].';dbname='.$config['base'];
 		       $this->conn = new PDO($dsn,$config['usu'],$config['pas'],$opc);
		       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		     } 
		  catch (Exception $ex) 
	         {
	          throw $ex;
	         }
	    }
    
    public function getListado()
{   
      $sql = "select * from ciclista";
      echo '<table>';
      foreach ($this->conn->query($sql) as $row) 
      {
        echo '<tr>';
          echo '<td>';
            echo '<a href="#" onclick="cargar(\'#Der\', \'derecho.php?X='. $row['dorsal'] . '\');">';  
            echo $row['dorsal'];
            echo '</a>';   
          echo '</td>';
          echo '<td>';
            echo $row['nombre']; 
          echo '</td>';
          echo '<td>';
            echo $row['edad']; 
          echo '</td>';
          echo '<td>';
            echo $row['nomeq']; 
          echo '</td>';
        echo '</tr>';                   
      }
      echo '</table>'; 
}  

  // metodo para obtener la lista de equipos
    public function getEquipos() 
    {
      $arg = func_get_args();
      if (count($arg)==1)
      {
        $sql = "select nomeq from equipo where nomeq != '".$arg[0]."' order by nomeq;";
      }
      else
      {
        $sql = "select nomeq from equipo order by nomeq;";
      }
      
      $resultado = $this->conn->query($sql);
      if ($resultado) 
      {
        $datos=$resultado->FetchAll();
        return $datos;
      }  
    } 
  // metodo para obtener el primer dorsal
    public function getPrimero() 
    {
      $sql = "select dorsal from ciclista limit 1";
      $resultado = $this->conn->query($sql);
      if ($resultado) 
      {
        $dato=$resultado->Fetch();
        return $dato[0];
      }  
    } 

  // metodo para Obtener datos de un solo ciclista
  public function getCiclista($dorsal)
    {         
        $sql="SELECT * FROM ciclista WHERE dorsal='$dorsal'";
        $resultado = $this->conn->query($sql);
        $fila = $resultado->FetchAll();
        foreach($fila as $row1)
        {
          $datos[0]=$row1['dorsal'];
          $datos[1]=$row1['nombre'];
          $datos[2]=$row1['edad'];
          $datos[3]=$row1['nomeq'];
        }
        
        return $datos;
  }  

  // Metodo para Modificar datos de un ciclista
  public function setCiclista($d0,$d1,$d2,$d3) 
  {
        $this->conn->beginTransaction();
        $sql = "UPDATE ciclista SET nombre = ?, edad = ?, nomeq = ? WHERE dorsal = ?";
        $stmt = $this->conn->prepare($sql);
        $OK = $stmt->execute(array($d1, $d2, $d3, $d0));
        $this->conn->commit();
  } 



}
 ?>  