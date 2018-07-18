<?php 
if (session_id() === "") { session_start(); }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mundial 2018</title>
	<link rel="shortcut icon" type="ima/logo1.png" href="ima/logo1.png">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/imagenes.css">
	<link rel="stylesheet" type="text/css" href="css/sociales.css">	
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
</head>
<body>
	<header>
		<div class="contenedor">
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<a href="principal.php">Inicio</a>
				<a href="frontend/grupos.php">Grupos</a>
				<a href="frontend/videos.php">Mejores goles y jugadas</a>
				<a href="frontend/contacto.php">Contacto</a>
			</nav>
			<div class="saludo"> 				      
        		<h2 class="salida"><a class="fa fa-external-link"  href="cerrar.php"></a></h2>
   			</div>	
		 	<div class="saludo1">       
        		<h4 class="fa fa-user usuario"> Golazo de  <?php echo ' ' . $_SESSION['usuario']; ?></h4>
   			</div>   												
		</div>
	</header>
	<div class="logo">
		<img src="ima/mundial.jpg">
	</div>
<section class="wrapper">
		<section class="main">
			<article>
				<h1>Bienvenido al mundial de Rusia 2018</h1>
				<p>Te traemos toda la información, sobre todas las selecciones que clasificaron al mundial, disfruta de todos sus goles, jugadas y todas sus noticias al día, también participa en los comentarios y podrás ganarte una camiseta autografiada por todos los jugadores de tu equipo, muchas gracias y disfruta de la página.</p>
			</article>
		</section>		
	<div class="flexslider">
		<ul class="slides">
			<li><a href="slider/mejores.php">
					<img src="slider/imgprin/mejores.jpg" alt="">
					<section class="flex-caption">
						<p>Quién sera el mejor</p>
					</section>
				</a>
			</li>
			<li>
				<a href="slider/mascota.php">
					<img src="slider/imgprin/mascota.jpg" alt="">
					<section class="flex-caption">
					<p>Todo sobre la mascota Zabivaka</p>
					</section>
				</a>
			</li>
			<li>
				<a href="slider/estadios.php">
					<img src="slider/imgprin/estadios.jpg" alt="">
					<section class="flex-caption">
						<p>Estadios con su localización</p>
					</section>
				</a>
			</li>
			<li>	
				<a href="slider/arbitros.php">
					<img src="slider/imgprin/arbitros.jpg" alt="">
					<section class="flex-caption">
						<p>Los referis que arbitraran los partidos</p>
					</section>
				</a>
			</li>
		</ul>
	</div>
	<aside>Selecciona tu país y disfruta de su información al máximo.</aside>
</section>
<section id="banderas">
	<div class="contenedor">
		<article><a href="paises/alemania/alemania.php">
			<img src="ima/Alemania.gif">
			<h4>Alemania vs México 17-06 12pm</h4></a>
		</article>
		<article><a href="paises/arabia saudita/arabia_saudita.php">
			<img src="ima/Arabia Saudita.gif">
			<h4>Arabia Saudita vs Rusia 14-06 12pm</h4></a>
		</article>
		<article><a href="paises/argentina/argentina.php">
			<img src="ima/Argentina.gif">
			<h4>Argentina vs Islandia 16-06 10am</h4></a>
		</article>
		<article><a href="paises/australia/australia.php">
			<img src="ima/Australia.gif">
			<h4>Australia vs Francia 16-06 07am</h4></a>
		</article>
		<article><a href="paises/belgica/belgica.php">
			<img src="ima/Bélgica.gif">
			<h4>Bélgica vs Panamá 18-06 12pm</h4></a>
		</article>
		<article><a href="paises/brasil/brasil.php">
			<img src="ima/Brasil.gif">
			<h4>Brasil vs Suiza 17-06 15pm</h4></a>
		</article>
		<article><a href="paises/colombia/colombia.php">
			<img src="ima/Colombia.gif">
			<h4>Colombia vs Japón 19-06 09am</h4></a>
		</article>
		<article><a href="paises/corea del sur/corea_del_sur.php">
			<img src="ima/Corea Del Sur.gif">
			<h4>Corea del Sur vs Suecia 18-06 09am</h4></a>
		</article>
		<article><a href="paises/costa rica/costa_rica.php">
			<img src="ima/Costa Rica.gif">
			<h4>Costa Rica vs Sebia  17-06 09am</h4></a>
		</article>
		<article><a href="paises/croacia/croacia.php">
			<img src="ima/Croacia.gif">
			<h4>Croacia vs Nigeria 16-06 16pm</h4></a>
		</article>
		<article><a href="paises/dinamarca/dinamarca.php">
			<img src="ima/Dinamarca.gif">
			<h4>Dinamarca vs Perú 16-06 13pm</h4></a>
		</article>
		<article><a href="paises/egipto/egipto.php">
			<img src="ima/Egipto.gif">
			<h4>Egipto vs Uruguay 15-06 09am</h4></a>
		</article>
		<article><a href="paises/españa/españa.php">
			<img src="ima/España.gif">
			<h4>España vs Portugar 15-06 15pm</h4></a>
		</article>
		<article><a href="paises/francia/francia.html">
			<img src="ima/Francia.gif">
			<h4>Francia vs Australia 16-06 07am</h4></a>
		</article>
		<article><a href="paises/inglaterra/inglaterra.html">
			<img src="ima/Inglaterra.gif">
			<h4>Inglaterra vs Túnez 18-06 15pm</h4></a>
		</article>
		<article><a href="paises/iran/iran.html">
			<img src="ima/Irán.gif">
			<h4>Irán vs Marruecos 15-06 12pm</h4></a>
		</article>
		<article><a href="paises/islandia/islandia.html">
			<img src="ima/Islandia.gif">
			<h4>Islandia vs Argentina 16-06 10am</h4></a>
		</article>
		<article><a href="paises/japon/japon.html">
			<img src="ima/Japón.gif">
			<h4>Japón vs Colombia 19-06 09am</h4></a>
		</article>
		<article><a href="paises/marruecos/marruecos.html">
			<img src="ima/Marruecos.gif">
			<h4>Marruecos vs Irán 15-06 12pm</h4></a>
		</article>
		<article><a href="paises/mexico/mexico.html">
			<img src="ima/México.gif">
			<h4>México vs Alemania 17-06 12pm</h4></a>
		</article>
		<article><a href="paises/nigeria/nigeria.html">
			<img src="ima/Nigeria.gif">
			<h4>Nigeria vs Croacia 16-06 16pm</h4></a>
		</article>
		<article><a href="paises/panama/panama.html">
			<img src="ima/Panamá.gif">
			<h4>Panamá vs Belgica 18-06 12pm</h4></a>
		</article>
		 <article><a href="paises/peru/peru.html">
			<img src="ima/Perú.gif">
			<h4>Perú vs Dinamarca 16-06 13pm</h4></a>
		</article>
		<article><a href="paises/polonia/polonia.html">
			<img src="ima/Polonia.gif">
			<h4>Polonia vs Senegal 19-06 12pm</h4></a>
		</article>
		<article><a href="paises/portugal/portugal.html">
			<img src="ima/Portugal.gif">
			<h4>Portugal vs España 15-06 15pm</h4></a>
		</article>
		<article><a href="paises/rusia/rusia.html">
			<img src="ima/Rusia.gif">
			<h4>Rusia vs Arabia Saudita 14-06 12pm</h4></a>
		</article>
		<article><a href="paises/senegal/senegal.html">
			<img src="ima/Senegal.gif">
			<h4>Senegal vs Polonia 19-06 12pm</h4></a>
		</article>
		<article><a href="paises/serbia/serbia.html">
			<img src="ima/Serbia.gif">
			<h4>Serbia vs Costa Rica 17-06 09am</h4></a>
		</article>
		<article><a href="paises/suecia/suecia.html">
			<img src="ima/Suecia.gif">
			<h4>Suecia vs Corea del Sur 18-06 09am</h4></a>
		</article>
		<article><a href="paises/suiza/suiza.html">
			<img src="ima/Suiza.gif">
			<h4>Suiza vs Brasil 17-06 15pm</h4></a>
		</article>
		<article><a href="paises/tunez/tunez.html">
			<img src="ima/Túnez.gif">
			<h4>Túnez vs Inglaterra 18-06 12pm</h4></a>
		</article>
		<article><a href="paises/uruguay/uruguay.html">
			<img src="ima/Uruguay.gif">
			<h4>Uruguay vs Egipto 15-06 09am</h4></a>
		</article>
	</div>
</section>
<div class="fb-comments comentarios" data-href="http://localhost/27/" data-numposts="3" data-colorscheme="dark" data-width="100%"></div>
<footer>
	<div class="sociales">
		<ul class="contact">
			<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
			<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
			<li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
			<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
		</ul>	
	</div>
	<div class="contenedor">
		<p class="copy">Mundial 2018-Copyright © Nicolás Mansilla Todos los Derechos Reservados</p>
	</div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
</body>
</html>