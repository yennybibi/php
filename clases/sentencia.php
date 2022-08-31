<?php

class sen{

	function __construct($sentencia, $conexion, $tabla) {
	
		$this->sent = $sentencia;
		$this->conexion = $conexion;
		$this->tabla = $tabla;
	
	}
	
	//ejecuta la consulta sql
	public function con() {
		$this->res = mysqli_query($this->conexion, $this->sent) or die('No se ejecuto la consulta a la tabla '. $this->tabla);
	}
	
	//insertar, editar y borrar
	public function insedbo() {
		mysqli_query($this->conexion, $this->sent) or die('no se inserto en la tabla'. $this->tabla);	
	}

}
?>