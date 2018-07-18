<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Estadios</title>
  <link rel="shortcut icon" type="ima/logo1.png" href="../ima/logo1.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estadios.css">
  <link rel="stylesheet" type="text/css" href="../css/sociales.css">
</head>
<body>
  <?php include "../frontend/menuslider.php"; ?>  
  <img src="imagenes/estadio.jpg" alt="imagen de estadio y copa">
  <div class="container estadios"> 
    <h1 class="my-4" align="center">Los 12 estadios de Rusia Mundial 2018</h1>
    <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/ekaterinburg.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Ekaterinburg Arena</h3>
          <p>También conocido como Estadio Central, está ubicado en al ciudad de Ekaterinburgo y tiene casi 60 años. Fue remodelado en 2015 para el mundial y actualmente cuenta con una capacidad para 42.500 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/y7q1kUjHuck" target="_blank">Ver estadio 360°</a>
        </div>
    </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/fisht-stadium.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Fisht Stadium</h3>
          <p>Conocido como el Estadio Olímpico de Sochi, es un estadio multiuso en la ciudad de Sochi y fue construido para los Juegos de Invierno de 2014. Tiene una capacidad para 48.000 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/kmS4eBNLWnw" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/kaliningrad-stadium.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Kaliningrad Stadium</h3>
          <p>También conocido como Arena Baltika, está situado en al ciudad de Kaliningrado y tiene una capacidad para 45.015 espectadores. Su construcción inició en 2014 y se culminó en abril de este año.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/Cy7MLHn2gDA" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/kazan-arena.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Kazan Arena</h3>
          <p>Ubicado en la ciudad de Kazán, tiene una capacidad de 45.500 espectadores. Su construcción costó 450 millones de dólares y fue inaugurado en 2013.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/o40UrCdnDAc" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
    <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="estadios.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="estadiosdos.php">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="estadiostres.php">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="estadiosdos.php" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
    </ul>

  </div>
  <footer>
    <div class="sociales">
      <ul class="contact">
        <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
        <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
        <li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
        <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
      </ul> 
    </div>
    <div>
      <p class="copy">Mundial 2018-Copyright © Nicolás Mansilla Todos los Derechos Reservados</p>
    </div>
  </footer>
</body>

</html>