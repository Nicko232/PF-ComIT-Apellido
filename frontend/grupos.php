<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>	
	<meta charset="utf-8">
	<link rel="shortcut icon" type="ima/logo1.png" href="ima/logo1.png">
	<title>Grupos</title>
	<link rel="stylesheet" type="text/css" href="../css/fontello.css">
	<link rel="stylesheet" type="text/css" href="../css/grupos.css">
	<link rel="stylesheet" type="text/css" href="../css/sociales.css">
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
	<?php include "../frontend/menu.php"; ?>
	<div class="logo">
		<img src="../ima/mundial.jpg">
	</div>
	<section class="grupos">
		<h1>Grupos del Mundial</h1>
			<div class="A">
				<h2>Grupo A</h2>
				<article>
					<p>Rusia<br> 
					Arabia Saudita<br>
					Egipto<br>
					Uruguay<br></p>
				</article>
			</div>
			<div class="B">
				<h2>Grupo B</h2>
				<article>
					<p>Portugal<br>
					España<br>
					Marruecos<br>
					Irán<br></p>
				</article>
			</div>
			<div class="C">
				<h2>Grupo C</h2>
				<article>
					<p>Francia<br>
					Australia<br>
					Perú<br>
					Dinamarca<br></p>
				</article>
			</div>
			<div class="D">
				<h2>Grupo D</h2>
				<article>
					<p>Argentina<br>
					Islandia<br>
					Croacia<br>
					Nigeria<br></p>
				</article>
			</div>
			<div class="E">
				<h2>Grupo E</h2>
				<article>
					<p>Brasil<br>
					Suiza<br>
					Costa Rica<br>
					Serbia<br></p>
				</article>				
			</div>
			<div class="F">
				<h2>Grupo F</h2>
				<article>
					<p>Alemania<br>
					México<br>
					Suecia<br>
					Corea del Sur<br></p>
				</article>
			</div>
			<div class="G">
				<h2>Grupo G</h2>
				<article>
					<p>Bélgica<br>
					Panamá<br>
					Túnez<br>
					Inglaterra<br></p>
				</article>
			</div>
			<div class="H">
				<h2>Grupo H</h2>
				<article>
					<p>Polonia<br>
					Senegal<br>
					Colombia<br>
					Japón<br></p>
				</article>
			</div>
	</section>
	<div class="final"  align="center">
	<img src="../ima/final (2).png" width="100%" alt="">
	</div>
	<div class="fb-comments comentarios" data-href="http://localhost/27/grupos.html/" data-numposts="3" data-colorscheme="dark" data-width="100%"></div>
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