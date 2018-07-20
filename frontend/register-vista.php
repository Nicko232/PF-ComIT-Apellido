<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Login / Register Mundial</title> 
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>   
<div class="registroylogin">
    <div class="container-form" align="center">
            <div class="header">
                <div class="logo-title">                   
                    <h2>Mundial 2018</h2>
                </div>
                <div class="menu">
                    <a href="login.php"><li class="module-login">Ingresar</li></a>
                    <a href="register.php"><li class="module-register active">Registrar</li></a>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
                <div class="welcome-form"><h1>Registrarte y </h1><h2>Disfruta..</h2></div>
                
                <div class="user line-input">
                    <label class="lnr lnr-envelope"></label>
                    <input type="email" placeholder="Escribe tu correo" name="correo">
                </div>
                <div class="user line-input">
                    <label class="lnr lnr-user"></label>
                    <input type="text" placeholder="Escribe tu nombre de usuario" name="usuario">
                </div>
                <div class="password line-input">
                    <label class="lnr lnr-lock"></label>
                    <input type="password" placeholder="Escribe tu contraseña" name="clave">
                </div>
                <div class="password line-input">
                    <label class="lnr lnr-lock"></label>
                    <input type="password" placeholder="Confirma tu contraseña" name="clave2">
                </div>                
                <?php if(!empty($error)): ?>
                <div class="mensaje">
                    <?php echo $error; ?>
                </div>
                <?php endif; ?>                
                <button type="submit">Registrarse<label class="lnr lnr-chevron-right"></label></button>
            </form>
    </div>
</div>  
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
