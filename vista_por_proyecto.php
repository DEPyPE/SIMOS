<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SIMOS </title>

    <link href='https://fonts.googleapis.com/css?family=Baloo 2' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Resource/Materialize/materialize.min.css"> 

    <link rel="stylesheet" type="text/css" href="Resource/css/vista_por_proyecto.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header_links.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header_menu.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/navbar_information.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/footer.css">
</head>
<body>

    <!-- MENU PRINCIPAL
    <nav class="nav-extended light-blue darken-4">
        <div class="nav-wrapper">
            <div class="row row-menu-and-title">
                <div class="col l1"></div>
                <div class="col l10">
                    <a href="#" class="brand-logo white-text"> <img class="seg-logo left" src="Resource/files/images/seg-logo.jpeg"> <strong class="main-title-project truncate">SIMOS <span class="name-program_project-header"></span> </strong> </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="home_validador.html"><i class="material-icons left">home</i>Proyectos</a></li>
                        <li><a class="close-session"><i class="material-icons left icon-exit-session">exit_to_app</i>Cerrar sesión</a></li>
                    </ul>
                </div>
                <div class="col l1"></div>
            </div>
        </div>

        <div class="nav-content">
            <div class="row">
                <div class="col l1"></div>
                <div class="col l10">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a href="#general_information">Información general </a></li>
                        <li class="tab"><a class="active" href="#posicionamiento">Posicionamiento</a></li>
                        <li class="tab"><a href="#plan_de_mejora">Plan de mejora y monitoreo</a></li>
                        <li class="tab"><a href="#formalizacion">Formalización</a></li>
                    </ul>
                </div>
                <div class="col l1"></div>
            </div>
        </div>
    </nav>
    -->

    <?php
      require_once("header_links.html");
      require_once("header_menu.html");
      require_once("navbar_information.html");
    ?>
      
<!--    SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
        <div id="informacion_general">
            <div class="row">
                <div class="col l1"></div>
                
                <div class="col l5">
                    <div class="card card-program">
                        <div class="card-content card-content-ft-proyecto">
                            
                            <span class="card-title">
                                <div class="card-title-ficha-tecnica">
                                  <span class="title-ft-style">
                                    Ficha técnica del programa
                                  </span>

                                  <i class="material-icons right teal darken-2 validated-ft-programa tooltipped" data-position="bottom" data-tooltip="Información validada">check</i>
                                  <a class="btn-floating btn-small waves-effect lime btn-validate-info btn-validate-info-project orange lighten-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Validar información" href="#ModalValidateTechnicalProjectInfo"><i class="material-icons">assignment_late</i></a>
                                </div>
                            </span>
                            
                            <table class="striped table-ficha-tecnica-proyecto">
                                <tbody>
                                  <tr>
                                    <td class="title-column"><strong>Programa <br>social:</strong></td>
                                    <td class="left-align NombreProyecto"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Clave del proyecto de inversión o proceso:</strong></td>
                                    <td class="left-align ClaveProyecto"></td>
                                  </tr>
                                  <tr>
                                      <td class="title-column"><strong>Dependencia o entidad responsable del programa:</strong></td>
                                      <td class="DependenciaProyecto"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Siglas:</strong></td>
                                    <td class="SiglasDependencia"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Unidad Responsable (UR):</strong></td>
                                    <td class="UnidadResponsable"> </td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Siglas:</strong></td>
                                    <td class="SiglasUnidadResponsable"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Responsable:</strong></td>
                                    <td class="NombreResponsable"></td>
                                  </tr>

                                </tbody>
                            </table>

                            <h6 class="NoFTProjectInformation">Sin información registrada</h6>

                            <div class="preloader-ft-container preloader-ft-program">
                                <div class="preloader-position">
                                  <div class="preloader-wrapper big active">
                                    <div class="spinner-layer spinner-blue-only">
                                      <div class="circle-clipper left">
                                        <div class="circle"></div>
                                      </div><div class="gap-patch">
                                        <div class="circle"></div>
                                      </div><div class="circle-clipper right">
                                        <div class="circle"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col l5">
                    <div class="card card-evaluation">
                        <div class="card-content card-content-evaluation">
                            <span class="card-title card-title-ficha-tecnica">
                                <h4 class="card-title-ficha-tecnica">
                                    <span class="title-ft-style">
                                      Ficha técnica del programa
                                    </span>

                                    <i class="material-icons right teal darken-2 validation-ft-evaluation tooltipped" data-position="bottom" data-tooltip="Información validada">check</i>
                                    <a class="btn-floating btn-small btn-validate-info-evaluation waves-effect orange lighten-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Validar información" href="#ModalValidateTechnicalEvaluationInfo"><i class="material-icons">assignment_late</i></a>
                                </h4>
                            </span>
                            
                            <table class="striped table-evaluation">
                                <tbody>
                                  <tr>
                                    <td class="title-column"><strong>Instancia Evaluadora:</strong></td>
                                    <td class="left-align InstanciaEvaluadora"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Nombre de la evaluación:</strong></td>
                                    <td class="left-align NombreDeEvaluacion"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Tipo de evaluación:</strong></td>
                                    <td  class="TipoEvaluacion"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Año de evaluación:</strong></td>
                                    <td class="AñoDeEvaluacion"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Nombre del informe:</strong></td>
                                    <td class="NombreDelInforme"></td>
                                  </tr>
                                  <tr>
                                    <td class="title-column"><strong>Costo de la evaluación:</strong></td>
                                    <td class="CostoEvaluacion">  </td>
                                  </tr>

                                </tbody>
                            </table>

                            <h6 class="NoFTEvaluationInformation">Sin información registrada</h6>

                            <div class="preloader-ft-container preloader-ft-evaluation">
                                <div class="preloader-position">
                                  <div class="preloader-wrapper big active">
                                    <div class="spinner-layer spinner-blue-only">
                                      <div class="circle-clipper left">
                                        <div class="circle"></div>
                                      </div><div class="gap-patch">
                                        <div class="circle"></div>
                                      </div><div class="circle-clipper right">
                                        <div class="circle"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col l1"></div>
            </div>
        </div>

            <!-- MODAL PARA MODIFICAR INFORMACIÓN SOBRE EL PROYECTO -->
            <div id="ModalValidateTechnicalProjectInfo" class="modal modal-add-project-info modal-fixed-footer">
              <div class="modal-content">                
                  <h4>¿Desea validar la información de la <strong>Ficha técnica del programa</strong> del programa/proyecto <strong class="nombre-programa"></strong>? </h4>
              </div>

              <div class="modal-footer modal-footer-val-info-project">
                <a class="btn-small waves-effect orange lighten-2 btn-validate-project-information"><i class="material-icons left">check</i> Validar información</a>
                <a class="btn-small waves-effect grey lighten-1 modal-close"><i class="material-icons left">close</i> Cancelar</a>
              </div>
            </div>

            <!-- MODAL PARA AGREGAR INFORMACIÓN SOBRE LA EVALUACIÓN -->
            <div id="ModalValidateTechnicalEvaluationInfo" class="modal modal-add-evaluation-info modal-fixed-footer">
                <div class="modal-content">                
                  <h4>¿Desea validar la información de la <strong>Ficha técnica de la evaluación</strong> del programa/proyecto <strong class="nombre-programa"></strong>? </h4>
                </div>

                <div class="modal-footer modal-footer-val-info-project">
                  <a class="btn-small waves-effect orange lighten-2 btn-validate-evaluation-information">Validar información</a>
                  <a class="btn-small waves-effect grey lighten-1 modal-close">Cancelar</a>
                </div>
            </div>

        <div id="posicionamiento">

          <div class="container">
            <div class="card">
    
              <div class="card-content card-content-comments">
                <span class="card-title card-title-comments">
                  <strong class="title-general-comments">
                      Opinión general
                      
                      <i class="material-icons right teal darken-2 indicator-general-opinion-validate tooltipped" data-position="bottom" data-tooltip="Opinión general validada">check</i>
                      <a class="btn-floating btn-small btn-modal2validate-general-opinion waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Validar opinión general" href="#ModalValidateGeneralOpinion"><i class="material-icons">assignment_late</i></a>
                  </strong>
                </span>
    
                <h6 class="OG_SinInfo">Sin información registrada</h6>
                <textarea disabled id="txtMainOpinionGeneral" class="materialize-textarea"></textarea>

                <div class="ValidatorObservationContainer OpinionGeneralObservaciones-Container">
                  <div class="observation-body OpinionGeneral-ObservacionesBody">
                    <h5>
                      <span class="ValidatorObservation-title">Observación realizada:</span>
                      <a class="btn-floating btn-small btn-edit-og-observation waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar observación" href="#ModalOGAddModifyObservation"><i class="material-icons">edit</i></a>
                    </h5>
    
                    <textarea disabled id="txtOpinionGeneral-ValidatorObservation" class="materialize-textarea"></textarea>
                  </div>

                  <div class="no-observation-body OpinionGeneral-NoObservacionesBody">
                        <a class="btn-floating btn-small btn-add-og-observation waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar observación" href="#ModalOGAddModifyObservation"><i class="material-icons">add</i></a>
                        <h5 class="NoValidatorObservation-title"></h5>
                        <h6 class="TxtLastObservation"></h6>
                  </div>
                </div>
    
            </div>
            </div>
          </div>

          <div class="container">
            <div class="card">
              <div class="card-content card-content-comments">
                  <span class="card-title card-title-comments">
                    <strong>
                      <h4 class="title-specific-comments">
                          Comentarios y observaciones <br> específicos por tema
                      </h4>
                    </strong>
                  </span>
                  <br>

                  <table class="highlight table-observaciones-especificas">
                    <thead>
                      <tr>
                          <th class="table-ApartadoEvaluacion">Apartado de la evaluación</th>
                          <th class="table-ObservacionEspecifica">Observación específica</th>
                          <th class="table-ObservacionAtender">Observaciones</th>
                      </tr>
                    </thead>

                    <tbody class="Table_TemasComentariosPorTema">
                    </tbody>
                  </table>

                  <h6 class="Temas_SinInfo">Sin información registrada</h6>
              </div>
            </div>
          </div>
    
        <!--
          <div class="container">
            <div class="card">
              <div class="card-content card-content-comments">
                  <span class="card-title card-title-comments">
                    <strong>
                      <h4 class="title-specific-comments">
                          <strong>Comentarios y observaciones específicos por tema</strong>
                      </h4>
                    </strong>
                  </span>
                  <br>
    
                  <div class="row">
                    <div class="col l11 m11 s10">
                      <textarea disabled id="ComentariosObservacionesEspecificosPorTema_Titulo" class="materialize-textarea"></textarea>
                    </div>
                    <div class="col l1 m1 s1 align-button-com-obs-por-tema">
                      <a class="btn-floating btn-small btn-edit-specific-comments-title waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar el titulo de la sección" href="#ModalModifyGeneralSpecificComments_Titulo"><i class="material-icons">edit</i></a>
                    </div>
                  </div>
                  
    
                  <table class="highlight table-observaciones-especificas">
                    <thead>
                      <tr>
                          <th class="table-ApartadoEvaluacion">Apartado de la evaluación</th>
                          <th class="table-ObservacionEspecifica">Observación específica</th>
                          <th class="table-ObservacionAtender">Observaciones</th>
                      </tr>
                    </thead>
    
                    <tbody class="Table_TemasComentariosPorTema">
                    </tbody>
                  </table>
    
                  <h6 class="OG_SinInfo">Sin información registrada</h6>
              </div>
            </div>
          </div>
        -->
        </div>

            <!-- MODAL PARA MODIFICAR LA INFORMACIÓN SOBRE "OPINIÓN GENERAL"-->
            <div id="ModalValidateGeneralOpinion" class="modal modal-add-opinion-general modal-fixed-footer">
              <div class="modal-content">

                  <div class="row mb-0">
                    <div class="col l12 m12 s12">
                      <h4>¿Desea validar la <span class="txt-strong">Opinión General</span> del programa <span class="nombre-programa txt-strong"></span>? </h4>
                    </div>
                  </div>

              </div>

              <div class="modal-footer">
                <a href="#!" class="btn-small waves-effect blue darken-3 btn-validate-general-opinion">Validar opinión general</a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
              </div>
            </div>

            <!-- MODAL PARA AGREGAR/MODIFICAR LA INFORMACIÓN SOBRE "OPINIÓN GENERAL"-->
            <div id="ModalOGAddModifyObservation" class="modal modal-add-opinion-general modal-fixed-footer">
              <div class="modal-content">
                  <h4 class="title-modal-add-project-info">Observación</h4>

                  <div class="input-field">
                    <textarea id="txtObservationValueModal" class="materialize-textarea" placeholder="Escriba la observación a realizar"></textarea>
                  </div>
              </div>

              <div class="modal-footer">
                <a href="#!" class="btn-small waves-effect blue   darken-2 btn-OG-Add-Observation    btn-rounded"><i class="material-icons left">save</i>Guardar</a>
                <a href="#!" class="btn-small waves-effect yellow darken-2 btn-OG-Modify-Observation btn-rounded"><i class="material-icons left">save</i>Guardar</a>
                <a href="#!" class="modal-close modal-close-rounded-form btn-small waves-effect grey lighten-1 btn-rounded"><i class="material-icons left">close</i>Cerrar</a>
              </div>
            </div>

            <!-- MODAL PARA MODIFICAR UN TEMA EN ESPECÍFICO Y SU INFORMACIÓN -->
            <div id="ModalAddModifyDataTheme" class="modal modal-add-opinion-general modal-fixed-footer">
              <div class="modal-content">
                  
                  <div class="row m-b0">              
                      <div class="col l12 m12 s12">
                          <h5 class="modal-titleTheme">Título del tema</h5>
                          <div class="input-field">
                            <textarea id="txtModalTituloTema" class="materialize-textarea"></textarea>
                          </div>
                          
                          <h5 class="modal-contentTheme">Contenido del tema</h5>
                          <div class="input-field">
                              <textarea id="txtModalContenidoTema" class="materialize-textarea"></textarea>
                          </div>

                          <div class="row">
                              <div class="col l12">

                                <div class="ValidatorObservationContainer TemasObservaciones-Container">
                                  <div class="observation-body Temas-ObservacionesBody">
                                    <h5>
                                      <span class="ValidatorObservation-title">Observación realizada:</span>
                                    </h5>

                                    <textarea disabled id="txtTemas-ValidatorObservation" class="materialize-textarea"></textarea>
                                  </div>
                                </div>

                              </div>
                          </div>

                          <p class="id_observacion_modal"></p>
                      </div>
                  </div>

              </div>

              <div class="modal-footer">
                <a href="#!" class="btn-small waves-effect blue darken-2 btn-modify-tema-especifico">Guardar <i class="material-icons left">save</i> </a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar <i class="material-icons left">close</i> </a>
              </div>
            </div>


  <?php
      require_once("footer.html");
  ?>

  <!-- Moment JS library 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>-->
  
  <!-- JQuery library -->
  <script src="Resource/jQuery/jquery-3.2.1.min.js"></script>

  <!-- Materialize CSS Framework -->
  <script src="Resource/Materialize/materialize.min.js"></script>

  <!-- Navbar information script -->
  <script src="Resource/js/header_menu.js"></script>

  <!-- Scripts of JS -->
  <script src="Resource/js/vista_por_proyecto.js"></script>

</body>
</html>

