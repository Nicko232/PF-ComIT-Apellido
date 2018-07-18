<?php 
    
    try {
    	include_once 'config.inc.php';
         $conexion = new PDO('mysql:host='.NOMBRE_SERVIDOR.'; dbname='.NOMBRE_BD, NOMBRE_USUARIO, CLAVE);
    	 $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    	 
    } catch(PDOException $prueba_error) {
        echo "conexion fallo " . $prueba_error->getMessage();
    }


?> 