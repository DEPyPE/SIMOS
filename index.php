<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href='https://fonts.googleapis.com/css?family=Baloo 2' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Resource/Materialize/materialize.min.css"> 

	  <link rel="stylesheet" type="text/css" href="Resource/css/index.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/footer.css">
</head>
<body>

    <!-- INSTANCIAMOS EL HEADER -->
    <?php  require_once("header.html") ?>

    <div class="row row-slider-and-login">
        <div class="col l2"></div>
        <div class="col l8">

          <div class="cards-login-container">
            <div class="card card-slider">
              <div class="card-content card-slider-content">
                  <div class="slider">
                      <ul class="slides slides-content">
                        <li>
                          <img class="slider-content" src="https://www.wrike.com/blog/content/uploads/2016/06/La-importancia-de-la-gestio-n-de-proyectos-preguntas-y-respuestas-con-Robert-Kelly.jpg">
                          <div class="caption center-align black-text">
                            <h3 class="">Administra</h3>
                            <h5 class="light">Administra tus recomendaciones.</h5>
                          </div>
                        </li>
                        <li>
                          <img class="slider-content" src="https://conceptodefinicion.de/wp-content/uploads/2020/08/evaluacion.jpg">
                          <div class="caption left-align black-text">
                            <h3>Posicionamiento</h3>
                            <h5 class="light">Compartir tu opinión sobre la evaluación que recibiste.</h5>
                          </div>
                        </li>
                        <li>
                          <img class="slider-content" src="https://economipedia.com/wp-content/uploads/Seguimiento-de-un-proyecto.jpg">
                          <div class="caption right-align black-text">
                            <h3>Seguimiento</h3>
                            <h5 class="light">Realiza un seguimiento a los programas o proyectos evaluados.</h5>
                          </div>
                        </li>
                        <li>
                          <img class="slider-content" src="https://www.awerty.net/wp-content/uploads/2014/02/Compartir-documentos-1024x585.png">
                          <div class="caption center-align black-text">
                            <h3>Plan de mejora</h3>
                            <h5 class="light">Crea y comparte plan de mejora de tu programa o proyecto.</h5>
                          </div>
                        </li>
                      </ul>
                  </div>
              </div>
            </div>

            <div class="card card-login">
              <div class="card-content">

                  <div class="input-field txtbox-input-user">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="txt_user" type="text" class="validate" placeholder="nombre@seg.guanajuato.gob.mx">
                      <label for="txt_user">Usuario</label>
                  </div>

                  <div class="input-field txtbox-input-password">
                      <i class="material-icons prefix">lock_outline</i>
                      <input id="txt_password" type="password" class="validate" placeholder="Contraseña">
                      <label for="txt_password">Contraseña</label>
                  </div>

                  <a class="btn waves-effect blue darken-1 btn-login-simos">Iniciar sesión</a>

                  
              </div>
            </div>
          </div>

        </div>
        <div class="col l2"></div>
    </div>

    <!-- INSTANCIAMOS EL FOOTER -->
    <?php  include_once( "footer.html" ) ?>


    <!-- LINK ALL THE RELATED SCRIPTS -->

    <!-- Moment JS library
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
    -->
    
    <!-- JQuery library -->
    <script src="Resource/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Materialize CSS Framework -->
    <script src="Resource/Materialize/materialize.min.js"></script>

    <!-- Scripts of JS -->
    <script src="Resource/js/index.js"></script>
</body>
</html>

