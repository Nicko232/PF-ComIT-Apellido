<?php 
	$conexion = new mysqli ("localhost", "root", "", "mundial");
	$consulta ='';

 	if( $conexion-> connect_errno) {
 		echo 'Error en la conexion';
 	} else {
 		echo "conexioon exitosa";
 	}

function llamar() {

	global $conexion, $consulta;
	$sql = 'SELECT * FROM jugador where id=1';
	return $conexion->query($sql);
}
?>