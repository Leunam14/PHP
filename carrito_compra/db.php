<?php
class DBControl {
	
	private $conn;
	
	function __construct() { 
	$this->conn = $this->conectarDB();
	}
	
	function conectarDB() {
		
		$conn = mysqli_connect("localhost","root","root","restaurante");
		return $conn;
	}
	
	function query($query){
		
		$resultado = mysqli_query($this->conn,$query);
		
		return $resultado;
		
	}
	
	function validar($query) {
		$resultado = mysqli_query($this->conn,$query);
	
		if(mysqli_num_rows($resultado) > 0){ 
			header("Location: pagina_principal.php");
			exit();
		}else {
		
			echo '<script language="javascript">';
			echo 'alert("Usuario/Contraseña incorrecta")';
			echo '</script>';
			header("Location: index.php");

		}
	}
	
	function crearUsuario ($query) {
		
		$resultado = mysqli_query($this->conn,$query);
		
		$usar_db = new DBControl();

		$conn = $usar_db->conectarDB();
		
		if($conn->query($resultado) > 0){
			
			echo '<script language="javascript">';
			echo 'alert("El usuario ya existe")';
			echo '</script>';
			die("Error al insertar datos: " . $conexion->error);
			header("Location: registro.php");
			exit();
		}else{
			echo '<script language="javascript">';
			echo 'alert("Usuario creado correctamente")';
			echo '</script>';
			header("Location: index.php");
		}	
		
	}
		
}
?>