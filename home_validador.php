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
    <link rel="stylesheet" type="text/css" href="Resource/css/header_links.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header_menu.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/navbar_information.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/footer.css">
</head>
<body>

    <?php
        require_once("header_links.html");
        require_once("header_menu.html");
        require_once("navbar_information.html");
    ?>

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

    <!-- Navbar information script -->
    <script src="Resource/js/header_menu.js"></script>

    <!-- Scripts of JS -->
    <script src="Resource/js/home_validador.js"></script>
</body>
</html>

