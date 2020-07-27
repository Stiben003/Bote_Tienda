<?php
	function lista_propietario(){		
		include('conexion.php');	
		$sql="SELECT * FROM propietario";
		return $result=$mysqli->query($sql); 
	}

	function lista_clientes(){		
		include('conexion.php');	
		$sql="SELECT * FROM clientes";
		return $result=$mysqli->query($sql); 
	}

	function lista_tipo_mant(){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_mantenimiento";
		return $result=$mysqli->query($sql); 
	}

	function lista_tripulacion(){		
		include('conexion.php');	
		$sql="SELECT * FROM tripulacion";
		return $result=$mysqli->query($sql); 
	}

	function lista_equipos(){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_equipo";
		return $result=$mysqli->query($sql); 
	}
?>