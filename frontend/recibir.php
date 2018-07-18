 <?php 
 	$link = mysql_connect("localhost", "root", "") or die ("<h2>No se encuentra servidor</h2>");
 	$db = mysql_select_db("formularios", $link) or die ("<h2>Error de conexion</h2>");

 	$nombre=$_POST['nombre'];
 	$correo=$_POST['correo'];
 	$passuno=$_POST['pass'];
 	$passdos=$_POST['passdos'];
 	$sexo=$_POST['sexo'];

 	$req =(strlen($nombre)*strlen($correo)*strlen($passuno)*strlen($passdos)*strlen($sexo)) or die("No se han llenados todos los campos <br><br><a href='registro.html>volver</a>'");

 	if ($passuno != $passdos) {
 		die('Las contrañas no coinciden <br><br><a href="registro.html">volver</a>');
 	}

 	$contraUsuario = md5 ($passuno);

 	mysql_query("INSERT INTO registro values ('', '$nombre', '$correo', '$contraUsuario', '$sexo')", $link) or die  ("<h2>Error de envio</h2>");


 	echo " <h2>Registro completo</h2>
 	<h3>Gracias por registrarse en nuestra web, ya puede ingresar como usuario</h3>
 	<a href='ingresar.html'> Logearse</a>";

 