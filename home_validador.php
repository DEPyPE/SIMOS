<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Programas y proyectos registrados</title>

    <link href='https://fonts.googleapis.com/css?family=Baloo 2' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="Resource/Materialize/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="Resource/css/home_validador.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/footer.css">
</head>
<body>

    <?php require_once("header.html"); ?>

    <div class="row row-tabs cyan darken-4">
        <div class="col l1"></div>

        <div class="col l7 m8">
            <ul class="tabs tabs-sections cyan darken-4">
                <li class="tab col l4 m4 s12"><a href="#user_information">Información del usuario</a></li>
                <li class="tab col l4 m4 s12"><a class="active" href="#registered_projects">Proyectos registrados</a></li>
            </ul>
        </div>

        <div class="col l3 m4">
            <ul class="right hide-on-med-and-down tab-close-session">
                <li><a href="#" class="close-session"><i class="material-icons left icon-exit-session">exit_to_app</i>Cerrar sesión</a></li>
            </ul>
        </div>

        <div class="col l1"></div>
    </div>

    <!-- SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
    <div id="user_information">
                    
        <!-- INFORMACIÓN DEL USUARIO -->
        <div class="row">
            <div class="col l3"></div>
            <div class="col l6">
                <div class="card card-program">
                    <div class="card-content">
                        <span class="card-title">
                            <h5>Información del usuario  <!--<a class="btn-floating btn-small waves-effect orange lighten-1 right"><i class="material-icons">edit</i></a>--> </h5>
                        </span>
                        
                        <table class="striped">                        
                            <tbody>
                            <tr>
                                <td class="title-column"><strong>Nombre(s):</strong></td>
                                <td class="left-align NameUser"></td>
                            </tr>
                            <tr>
                                <td class="title-column"><strong>Apellido(s):</strong></td>
                                <td class="left-align LastNameUser"></td>
                            </tr>
                            <tr>
                                <td class="title-column"><strong>Correo:</strong></td>
                                <td class="EmailUser">  </td>
                            </tr>
                            <tr>
                                <td class="title-column"><strong>Perfil:</strong></td>
                                <td class="ProfileUser">  </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col l3"></div>
        </div>

    </div>

    <!-- SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
    <div id="registered_projects">
        
        <!-- SELECT DINÁMICO CON LOS AÑOS DE LOS EJERCICIOS FISCALES -->
        <div class="row container-ejercicio-fiscal">
            <div class="col l1"></div>
            <div class="col l10 m12 s12">

                <div class="ejercicio-fiscal-container">
                    <div class="row mb-0 row-ejercicio-fiscal">
                        <div class="col l2 m2">
                        <label>Ejercicio fiscal</label>
                        <select class="browser-default select-ejercicio-fiscal">
                            <option value="2019">2019</option>
                        </select>
                        </div>
                        <div class="col l4 m4">
                        <span class="error-ejercicio-fiscal">Error el cargar los ejercicios fiscales</span>
                        </div>
                    </div>
                    <div class="no-data-ejercicio-fiscal">
                        <h4>Sin programas/proyectos registrados</h4>
                    </div>
                </div>

            </div>
            <div class="col l1"></div>
        </div>

        <!-- PROGRAMAS/PROYECTOS DINÁMICOS DE ACUERDO AL EJERCICIO FISCAL SELECCIONADO -->
        <div class="row">
            <div class="col l1"></div>
            <div class="col l10">
                <div class="row projects-container">

                </div>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <?php require_once("footer.html"); ?>

    <!-- Moment JS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
    
    <!-- JQuery library -->
    <script src="Resource/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Materialize CSS Framework -->
    <script src="Resource/Materialize/materialize.min.js"></script>

    <!-- Scripts of JS -->
    <script src="Resource/js/home_validador.js"></script>
</body>
</html>

