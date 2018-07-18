<?php 

	include_once("conexion.php");
	//creo las variables, indico el metodo y el name de cada uno  
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	$asunto= $_POST['asunto'];
	$mensaje= $_POST['mensaje'];

	//hacemos la sentencia de sql para insertar
	$query="INSERT INTO contacto(nombre,correo,asunto,mensaje) VALUES('$nombre','$correo','$asunto','$mensaje')";
	$resultado= $conexion->query($query);
	//vamos a ejecutar
	if($resultado){
		require "frontend/principal-vista.php";
		echo "<script> alert( 'El mensaje fue enviado exitosamente' );</script>";

	}else{
		echo "<script> alert( 'El mensaje fallo intente nuevamente' );</script>";
	}

?>

