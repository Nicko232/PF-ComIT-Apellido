	<header>
		<div class="contenedor">
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<a href="../../mundial.php">Inicio</a>
				<a href="../../frontend/grupos.php">Grupos</a>
				<a href="../../frontend/videos.php">Mejores goles y jugadas</a>
				<a href="../../frontend/contacto.php">Contacto</a>
			</nav>
			<div class="saludo"> 				      
        		<h2 class="salida"><a class="fa fa-external-link"  href="../../cerrar.php"></a></h2>
   			</div>	
		 	<div class="saludo1">       
        		<h4 class="fa fa-user usuario"> Golazoo de <?php echo ' ' . $_SESSION['usuario']; ?></h4>
   			</div>  												
		</div>
	</header>
