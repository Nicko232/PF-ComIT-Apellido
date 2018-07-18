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
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/luzhniki-stadium.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Luzhniki Stadium</h3>
          <p>Conocido durante la Unión Soviética como Estadio Central Lenin, se encuentra en la ciudad de Moscú y fue inaugurado en 1956. Tras varias remodelaciones alcanzó una capacidad total de 81.500 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/Q_jX1Q5KfAE" target="_blank">Ver estadio 360°</a>
        </div>
    </div>
  <hr>
     <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/mordovia-arena.jpeg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Mordovia Arena</h3>
          <p>Inicialmente llamado Estadio Yubileyniy, este estadio está ubicado en al ciudad de Saransk en la República de Mordovia. Su construcción duró 8 años y culminó en abril de 2018 tras una inversión de USD 400 millones. Tiene una capacidad para 45.100 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/yM2HF8iLbpE" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/nizhny-novgorod-stadium.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Nizhny Novgorod Stadium</h3>
          <p>Ubicado en la ciudad de Nizhny Novgorod fue construido en especialmente para el Mundial y cuenta con una  capacidad de 55.300 espectadores.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/_m3dK8_XVlo" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="imagenes/rostov-arena.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Rostov Arena</h3>
          <p>Ubicado en la ciudad de Rostov del Don y con capacidad para 43.702 su remodelación para el mundial se inició en 2014 y terminó en 2018.</p>
          <a class="btn btn-danger" href="https://www.youtube.com/embed/Ldz_8MJqIy0" target="_blank">Ver estadio 360°</a>
        </div>
      </div>
  <hr>
    <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="estadios.php" aria-label="Previous">
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
          <a class="page-link" href="estadiostres.php" aria-label="Next">
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