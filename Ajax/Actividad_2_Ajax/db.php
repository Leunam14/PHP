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
		
		$conn = mysqli_connect("localhost","root","","restaurante");
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
	
		
}
?>