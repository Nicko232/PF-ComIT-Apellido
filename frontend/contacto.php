<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="ima/logo1.png" href="../ima/logo1.png">
    <title>Contacto</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/contacto.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/sociales.css">   
</head>
<body> 
    <?php include "../frontend/menu.php"; ?>
    <div class="logo">
        <img src="../ima/mundial.jpg">
    </div>
       <h2 class="mb-5 font-weight-bold text-center">Si deseas saber más de nosotros o estas interesado en contactarnos, rellena este formulario:</h2>
       <div class="container">     <!--Section: Contact-->
            <section id="contact">
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">
                       <!-- Form contact -->
                        <form class="p-5" action="../formulario_contacto.php" method="post">
                          <div class="md-form form-sm"> <i class="fa fa-user prefix blue-text"></i>
                            <input type="text" id="form3" class="form-control form-control-sm" name="nombre">
                            <label for="form3">Nombre</label>
                          </div>
                          <div class="md-form form-sm"> <i class="fa fa-envelope prefix blue-text"></i>
                            <input type="email" id="form2" class="form-control form-control-sm" name="correo">
                            <label for="form2">Correo</label>
                          </div>
                         <div class="md-form form-sm"> <i class="fa fa-tag prefix blue-text"></i>
                            <input type="text" id="form32" class="form-control form-control-sm" name="asunto">
                            <label for="form34">Asunto</label>
                          </div>
                          <div class="md-form form-sm"> <i class="fa fa-pencil prefix blue-text"></i>
                            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4" name="mensaje"></textarea>
                            <label for="form8">Escribe tu mensaje</label>
                          </div>
                            <div class="text-center mt-4">
                            <button class="btn btn-primary">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
                          </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-7 col-md-12">
                        <!--Grid row-->
                        <div class="row text-center">
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-3">
                               <p><i class="fa fa-map fa-1x mr-2 blue-text"></i>Bahia Blanca, Soler 706</p>
                            </div>
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">
                                <p><i class="fa fa-building fa-1x mr-2 blue-text"></i>Lun-Vie, 8:00-22:00</p>
                            </div>
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">
                                <p><i class="fa fa-phone fa-1x mr-2 blue-text"></i>291 5225331</p>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half map-container mb-5 mr-2" style="height: 400px"></div>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!--Section: Contact-->
        </div>
    </main>
    <!--Main layout-->
</div>
    <!--Footer-->
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
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js"></script>

    <!-- Google Maps settings -->
    <script>
        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(-38.7222451, -62.2581267,17);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Bahia Blanca"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);
    </script>
</body>
</html>
