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

    <link rel="stylesheet" type="text/css" href="Resource/css/header_links.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header_menu.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/navbar_information.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/home_admin.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/footer.css">
</head>
<body>

    <?php
        require_once("header_links.html");
        require_once("header_menu_admin.html");
        require_once("navbar_information.html");
    ?>

    <!-- SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
    <div id="usuarios">

        <!-- SELECT DINÁMICO CON LOS AÑOS DE LOS EJERCICIOS FISCALES -->
        <div class="row">
            <div class="col l1"></div>
            <div class="col l10 m12 s12">

                <div class="card border-rounded">
                    <div class="card-content">
                        <span class="card-title">
                            <i class="hiden-title">.</i>
                            <a class="btn-small btn-add-user-info waves-effect modal-trigger blue darken-2 border-rounded right" href="#modal-add-edit-user"><i class="material-icons left">add</i>Agregar usuario</a>
                        </span>

                        <div class="row">
                            <div class="col l4">

                                <span class="card-title card-title-user-validador"> Validador </span>

                                <ul class="collection collection-users collection-users-validador">
                                    <li class="collection-item avatar">
                                        <img src="Resource/images/avatar.png" alt="" class="circle">
                                        <span class="title user-name-list">Rosa Isabel Magadan Vega</span>

                                        <p>
                                            <i class="user-email-list">magadan_vega@guanajuato.gob.mx</i> <br>
                                            <i class="user-profile-list">Validador</i>
                                        </p>

                                        <a class="user-options-container btn-edit-user">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <div class="col l4">
                                <span class="card-title card-title-user-capturista"> Capturista </span>

                                <ul class="collection collection-users collection-users-capturista">
                                    <li class="collection-item avatar">
                                        <img src="Resource/images/avatar.png" alt="" class="circle">
                                        <span class="title user-name-list">Marta Fernanda Guzman Huerta</span>
                                        <p>
                                            <i class="user-email-list">mguzmanhu@guanajuato.gob.mx</i> <br>
                                            <i class="user-profile-list">Capturista</i>
                                        </p>
                                        
                                        <a class="user-options-container btn-edit-user">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col l4">
                                <span class="card-title card-title-user-administrador"> Administrador </span>

                                <ul class="collection collection-users collection-users-administrador">
                                    <li class="collection-item avatar">
                                        <img src="Resource/images/avatar.png" alt="" class="circle">
                                        <span class="title user-name-list">Rosa Isabel Magadan Vega</span>
                                        <p>
                                            <i class="user-email-list">magadan_vega@admin.simos.com</i> <br>
                                            <i class="user-profile-list">Administrador</i>
                                        </p>

                                        <a class="user-options-container btn-edit-user">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col l1"></div>
        </div>

    </div>

        <!-- Modal agregar o editar un usuario-->
        <div id="modal-add-edit-user" class="modal modal-fixed-footer border-rounded">
            <div class="modal-content">
                <h5 class="modal-title">Datos del usuario</h5>

                <div class="row">
                    <div class="col l6 m6 s12">
                        <h6><strong>Nombre(s):</strong></h6>

                        <div class="input-field">
                            <input placeholder="Nombre(s)" id="txtNombre" type="text" class="validate center-align">
                        </div>
                    </div>

                    <div class="col l6 m6 s12">
                        <h6><strong>Apellido(s):</strong></h6>

                        <div class="input-field">
                            <input placeholder="Apellido(s)" id="txtApellidos" type="text" class="validate center-align">
                        </div>
                    </div>

                    <div class="col l6 m6 s12">
                        <h6><strong>Correo:</strong></h6>

                        <div class="input-field">
                            <input placeholder="Correo electrónico" id="txtCorreo" type="text" class="validate center-align">
                        </div>
                    </div>

                    <div class="col l3 m3 s12">
                        <h6><strong>Contraseña:</strong></h6>

                        <div class="input-field">
                            <input placeholder="Contraseña" id="txtPassword" type="password" class="validate center-align">
                        </div>
                    </div>

                    <div class="col l3 m3 s12">
                        <h6><strong>Perfil:</strong></h6>
                        <select id="selectPerfil" class="browser-default">
                            <option value="" disabled selected>Seleccione</option>
                            <option value="Capturista">Capturista</option>
                            <option value="Validador">Validador</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="waves-effect blue darken-2 btn btn-create-new-user btn-rounded">Crear usuario</a>
                <a class="waves-effect orange        btn btn-edit-data-user  btn-rounded">Modificar usuario</a>
                <a class="modal-close waves-effect grey btn btn-rounded btn-close-modal">Cancelar</a>
            </div>
        </div>

    <div id="proyectos">

        <div class="container">
            <div class="card border-rounded">
                <div class="card-content">
                    
                    <span class="card-title">
                        <i class="hiden-title">.</i>
                        <a class="btn-small btn-add-pp-info waves-effect modal-trigger blue darken-2 border-rounded right" href="#modal-add-edit-pp"><i class="material-icons left">add</i>Agregar programa o proyecto</a>
                    </span>

                    <div class="row">

                        <div class='col l4 m6 s12'>
                            <div class='card card-registered-project'>
                                <div class='card-content'>
                                    <span class='card-title card-title-project'> <strong class="pp-clave">FAETA</strong> <a class="btn-floating btn-small btn-edit-pp-info waves-effect modal-trigger orange border-rounded right" href="#modal-add-edit-pp"><i class="material-icons">edit</i></a> </span>

                                    <div class='project-stage-progress'>
                                        <div class="title-step-container"> <strong class='title-step'>Ejercicio fiscal:</strong> <span class='steps-content right pp-year'>2021</span> </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>  

    </div>

        <!-- Modal agregar o editar un usuario-->
        <div id="modal-add-edit-pp" class="modal modal-fixed-footer border-rounded">

            <div class="modal-content">
                <h5 class="modal-title">Datos del programa o proyecto</h5>

                <div class="row">
                    <div class="col l8 m8 s12">
                        <h6><strong>Clave del programa o proyecto:</strong></h6>

                        <div class="input-field">
                            <input placeholder="Nombre o clave del programa o proyecto" id="txtClavePP" type="text" class="validate center-align">
                        </div>
                    </div>

                    <div class="col l4 m4 s12">
                        <h6><strong>Ejercicio fiscal:</strong></h6>
                        <select id="selectEjercicioFiscalPP" class="browser-default">
                            <option value="" disabled selected>Seleccione un año</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a class="waves-effect blue darken-2 btn btn-create-pp btn-rounded">Crear programa o proyecto</a>
                <a class="waves-effect orange        btn btn-edit-pp   btn-rounded">Modificar programa o proyecto</a>
                <a class="modal-close btn-close-modal waves-effect grey btn btn-rounded">Cancelar</a>
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
    <script src="Resource/js/home_admin.js"></script>
</body>
</html>

