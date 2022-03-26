<?php
class DBControl {
	
	private $conn;
	
	function __construct() { 
	$this->conn = $this->conectarDB();
	}
	/**
	 * Undocumented function
	 *Método que se va a encargar de conectarse a la bbdd
	 * @return void
	 */
	function conectarDB() {
		
		$conn = mysqli_connect("localhost","root","root","restaurante");
		return $conn;
	}
	/**
	 * Undocumented function
	 *Método que se va a encargar de retornar el resultado de la query, realizando una conexión
	 * @param [type] $query
	 * @return void
	 */
	function query($query){
		
		$resultado = mysqli_query($this->conn,$query);
		
		return $resultado;
		
	}
	/**
	 * Undocumented function
	 *Función que se encarga de validar si la query obtiene resultados o no (si concuerda usuario con pass),
	  para ver si lo lleva a la página principal del restaurante o si se queda en el login
	 * @param [type] $query
	 * @return void
	 */
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
	/**
	 * Función para crear un usuario. Funciona igual que el anterior método, ya que si encuentra resultado
	 * quiere decir que ya hay un usuario registrado con los mismos valores.
	 *
	 * @param [type] $query
	 * @return void
	 */
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