	<header>
		<div class="contenedor">
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<a href="../mundial.php">Inicio</a>
				<a href="grupos.php">Grupos</a>
				<a href="videos.php">Mejores goles y jugadas</a>
				<a href="contacto.php">Contacto</a>
			</nav>
			<div class="saludo"> 				      
        		<h2 class="salida"><a class="fa fa-external-link"  href="../cerrar.php"></a></h2>
   			</div>	
		 	<div class="saludo1">       
        		<h4 class="fa fa-user usuario"> Golazo de <?php echo ' ' . $_SESSION['usuario']; ?></h4>
   			</div>  												
		</div>
	</header>
