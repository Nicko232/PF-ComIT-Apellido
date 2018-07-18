<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: mundial.php');
    }
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        
        $clave = $_POST['clave'];
        $clave2 = $_POST['clave2'];
        
        
        $clave = hash('sha512', $clave);
        $clave2 = hash('sha512', $clave2);
        
        $error = '';
        
        if (empty($correo) or empty($usuario) or empty($clave) or empty($clave2) ){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                include_once 'conexion.php';
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM login WHERE usuario = :usuario LIMIT 1');
            $statement2 =$conexion->prepare('SELECT * FROM login WHERE correo = :correo LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $statement2->execute(array(':correo' => $correo));
            $resultado = $statement->fetch();
            $resultado2 =$statement2->fetch();

            if (strlen($usuario) < 4) {
            $error .= "El nombre debe ser más largo que 6 caracteres.";
            }

            if (strlen($usuario) > 24) {
            $error .= "El nombre no puede ocupar más de 24 caracteres.";
            }

            if (strlen($correo) > 33) {
            $error .= "El correo no puede ocupar más de 33 caracteres.";
            }
                                    
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe. </i>';
            }

            if ($resultado2 != false){
                $error .= '<i>Este correo ya existe. </i>';
            }  

            if ($clave != $clave2){
                $error .= '<i> Las contraseñas no coinciden</i>';
            }
            
        }
        
        if ($error == ''){
            /*$cualquiercosa = "INSERT INTO login (correo, usuario, clave) VALUES (     $correo, $usuario, $clave)"; 
            echo $cualquiercosa;*/
            $statement = $conexion->prepare('INSERT INTO login (correo, usuario, clave) VALUES (:correo, :usuario, :clave)');
            $statement->execute(array(
                
                ':correo' => $correo,
                ':usuario' => $usuario,
                ':clave' => $clave,
               
            ));
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }
    require 'frontend/register-vista.php';

?>