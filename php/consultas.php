<?php
	function lista_propietario(){		
		include('conexion.php');	
		$sql="SELECT * FROM propietario";
		return $result=$mysqli->query($sql); 
	}

	function extraerPropietario($id){		
		include('conexion.php');	
		$sql="SELECT * FROM propietario WHERE codpropietario = '$id' ";
		return $result=$mysqli->query($sql); 
	}

	function lista_clientes(){		
		include('conexion.php');	
		$sql="SELECT * FROM clientes";
		return $result=$mysqli->query($sql); 
	}

	function extraerClientes($id){		
		include('conexion.php');	
		$sql="SELECT * FROM clientes WHERE codcliente = '$id' ";
		return $result=$mysqli->query($sql); 
	}

	function lista_tipo_mant(){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_mantenimiento";
		return $result=$mysqli->query($sql); 
	}

	function extraerTipoMant($id){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_mantenimiento WHERE codtipo_mant = '$id' ";
		return $result=$mysqli->query($sql); 
	}

	function lista_tripulacion(){		
		include('conexion.php');	
		$sql="SELECT * FROM tripulacion";
		return $result=$mysqli->query($sql); 
	}

	function extraerTripulacion($id){		
		include('conexion.php');	
		$sql="SELECT * FROM tripulacion WHERE codtripulacion = '$id' ";
		return $result=$mysqli->query($sql); 
	}

	function lista_equipos(){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_equipo";
		return $result=$mysqli->query($sql); 
	}
	
	function extraerEquipo($id){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_equipo WHERE codtipo_equipo = '$id' ";
		return $result=$mysqli->query($sql); 
	}
?>