<?php
class bd {
	
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
			
			$conn = mysqli_connect("localhost","root","","pedidos");
			return $conn;
		}
	
	/**
	 *Método que se va a encargar de retornar el resultado de la query, realizando una conexión
	 * @param [type] $query
	 * @return void
	 */
	function query($query){

		$resultado = mysqli_query($this->conn,$query);
		
		$usar_db = new bd();

		$conn = $usar_db->conectarDB();
		
		return $resultado;
		
	}
	
		
}
?>