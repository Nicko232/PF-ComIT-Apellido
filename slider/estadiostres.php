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
    <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/saint-petersburg-stadium.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Saint Petersburg Stadium</h3>
          <p>Llamado Estadio Krestovsky y ubicado en la ciudad de San Petersburgo, es el estadio local del FC Zenit. Tras 10 años de construcción y más de 1.000 millones de dólares invertidos, las obras culminaron en 2017. Tiene capacidad para 70.000 personas.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/pXsAySKZkO4" target="_blank">Ver estadio 360°</a>
        </div>
    </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/samara-arena.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Samara Arena</h3>
          <p>También llamado Cosmos Arena, está ubicado en la ciudad de Samara y fue construido para el Mundial e inaugurado este año. Tiene una capacidad de 45.000 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/_Rae5yWEgVo" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/spartak-stadium.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Spartak Stadium</h3>
          <p>También conocido como Otkrytie Arena, este estadio se encuentra en la ciudad de Moscú. Su construcción costó 430 millones de dólares y fue inaugurado en 2014. Tiene una capacidad para 45.000 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/H-d5wyzu8dY" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/volgograd-arena.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Volgogrado Arena</h3>
          <p>Está situado en al ciudad de Volgogrado y tiene una capacidad para 45.500 espectadores. Fueron USD 260 millones los invertidos durante su construcción que fue planificada específicamente para el Mundial de Rusia 2018.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/dftlfzT_4yk" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
    <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="estadiosdos.php" aria-label="Previous">
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
          <a class="page-link" href="#" aria-label="Next">
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