<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SIMOS </title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Baloo 2' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Resource/Materialize/materialize.min.css"> 
	  
    <link rel="stylesheet" type="text/css" href="Resource/css/home_capturista.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/header.css">
    <link rel="stylesheet" type="text/css" href="Resource/css/footer.css">
</head>
<body>

    <?php
        require_once("header.html");
        require_once("menu_tabs.html");
    ?>
      
      <div class="row">
        <div class="col l1"></div>

        <div class="col l10">

            <!--    SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
            <div id="general_information">

                <div class="row">
                    <div class="col l1"></div>
                    
                    <div class="col l5">
                        <div class="card card-program">
                            <div class="card-content card-content-ft-proyecto">
                                
                                <span class="card-title">
                                    <strong class="card-title-ficha-tecnica">
                                      Ficha técnica del programa
                                    </strong>

                                    <i class="material-icons right wait-validation-ft-program tooltipped" data-position="bottom" data-tooltip="En espera de validación">update</i>
                                    <i class="material-icons right validation-ft-program tooltipped" data-position="bottom" data-tooltip="Información validada">check</i>
                                    <a class="btn-floating btn-small btn-add-project-information  waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar información" href="#ModalAddModifyTechnicalProjectInfo"><i class="material-icons">add</i></a>
                                    <a class="btn-floating btn-small btn-edit-project-information waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar información" href="#ModalAddModifyTechnicalProjectInfo"><i class="material-icons">edit</i></a>
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

                                <span class="card-title">
                                    <strong class="card-title-ficha-tecnica">
                                      Ficha técnica de la evaluación
                                    </strong>

                                    <i class="material-icons right wait-validation-ft-evaluation tooltipped" data-position="bottom" data-tooltip="En espera de validación">update</i>
                                    <i class="material-icons right validation-ft-evaluation tooltipped" data-position="bottom" data-tooltip="Información validada">check</i>
                                    <a class="btn-floating btn-small btn-add-evaluation-information waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar información" href="#ModalAddModifyTechnicalEvaluationInfo"><i class="material-icons">add</i></a>
                                    <a class="btn-floating btn-small btn-edit-evaluation-information waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar información" href="#ModalAddModifyTechnicalEvaluationInfo"><i class="material-icons">edit</i></a>
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

                <!-- MODAL PARA AGREGAR INFORMACIÓN SOBRE EL PROYECTO -->
                <div id="ModalAddModifyTechnicalProjectInfo" class="modal modal-add-project-info modal-fixed-footer">
                  <div class="modal-content">
                    
                      <h4 class="title-modal-add-project-info">Información del programa o proyecto</h4>
                      
                      <div class="row m-b0">                
                          <div class="col l8 m8 s12">
                              <h6><strong>Nombre del programa/proyecto social:</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Programa social" id="txtNombreProyecto" type="text" class="validate">
                              </div>
                          </div>

                          <div class="col l4 m4 s12">
                              <h6><strong>Clave del proyecto:</strong></h6>
                              <div class="input-field">
                              <input placeholder="Clave del proyecto" id="txtClaveProyecto" type="text" class="validate">
                          </div>
                          </div>
                      </div>

                      <div class="row m-b0">
                          <div class="col l8 m8 s12">
                              <h6><strong>Dependencia o entidad responsable del programa:</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Dependencia responsable" id="txtDependenciaProyecto" type="text" class="validate">
                              </div>
                          </div>

                          <div class="col l4 m4 s12">
                              <h6><strong>Siglas de la dependencia</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Siglas de la dependencia" id="txtSiglasDependencia" type="text" class="validate">
                              </div>
                          </div>
                      </div>

                      <div class="row m-b0">
                          <div class="col l8 m8 s12">
                              <h6><strong>Unidad Responsable (UR):</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Unidad responsable" id="txtUnidadResponsable" type="text" class="validate">
                              </div>
                          </div>

                          <div class="col l4 m4 s12">
                              <h6><strong>Siglas de la UR:</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Siglas de la UR" id="txtSiglasUnidadResponsable" type="text" class="validate">
                              </div>
                          </div>
                      </div>

                      <div class="row m-b0">
                          <div class="col l8 m8 s6">
                              <h6><strong>Reponsable del proyecto</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Reponsable del proyecto" id="txtNombreResponsable" type="text" class="validate">
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="modal-footer modal-footer-val-info-project">
                    <a class="btn-small waves-effect green darken-3 btn-validate-ft-program-project btn-rounded left"><i class="material-icons left">send</i> Validar información</a>
                    <a class="btn-small waves-effect blue darken-3 btn-save-data-project-information btn-rounded"><i class="material-icons left">save</i> Guardar</a>
                    <a class="btn-small waves-effect grey lighten-1 modal-close btn-rounded"><i class="material-icons left">close</i> Cancelar</a>
                  </div>
                </div>

                <!-- MODAL PARA AGREGAR INFORMACIÓN SOBRE LA EVALUACIÓN -->
                <div id="ModalAddModifyTechnicalEvaluationInfo" class="modal modal-add-evaluation-info modal-fixed-footer">
                  <div class="modal-content">

                      <h5 class="title-modal-add-project-info">Información de la evaluación</h5>
                      
                      <div class="row m-b0">
                          <div class="col l12 m12 s12">
                              <h6><strong>Nombre de la instancia evaluadora:</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Instancia evaluadora" id="txtInstanciaEvaluadora" type="text" class="validate">
                              </div>
                          </div>
                      </div>

                      <div class="row m-b0">
                          <div class="col l6 m6 s12">
                              <h6><strong>Nombre de la evaluación:</strong></h6>
                              <div class="input-field">
                                  <input placeholder="Nombre de la evaluación" id="txtNombreEvaluacion" type="text" class="validate">
                              </div>
                          </div>

                          <div class="col l6 m6 s12">
                              <h6><strong>Tipo de evaluación:</strong></h6>

                              <div class="input-field">
                                  <input placeholder="Tipo de evaluación" id="txtTipoEvaluacion" type="text" class="validate">
                              </div>
                          </div>
                      </div>

                      <div class="row m-b0">

                        <div class="col l6 m6 s12">
                            <h6><strong>Nombre del informe:</strong></h6>

                            <div class="input-field">
                                <input placeholder="Informe" id="txtNombreInforme" type="text" class="validate">
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                          <h6><strong>Año:</strong></h6>

                          <div class="input-field">
                              <input placeholder="Año evaluación" id="txtYearEvaluation" class="center-align" type="text" class="validate">
                          </div>
                        </div>

                        <div class="col l3 m6 s12">
                          <h6><strong>Costo:</strong></h6>

                          <div class="input-field">
                              <input placeholder="Costo de la evaluación" id="txtCostoEvaluacion" class="center-align" type="text" class="validate">
                          </div>
                        </div>

                      </div>

                  </div>

                  <div class="modal-footer">
                    <a class="btn-small waves-effect green darken-2 btn-send-validation-evaluation btn-rounded left"><i class="material-icons left">send</i> Enviar para validar</a>
                    <a class="btn-small waves-effect blue  darken-2 btn-save-evaluation-data btn-rounded"><i class="material-icons left">save</i>Guardar</a>
                    <a class="btn-small waves-effect grey lighten-1 btn-modal-close modal-close btn-rounded"><i class="material-icons left">close</i> Cancelar</a>
                  </div>
                </div>

            <!--    SECCIÓN PARA LA OPINIÓN GENERAL POR PARTE DEL ENCARGADO DEL PROGRAMA -->
            <div id="posicionamiento">

              <div class="container">
                <div class="card">

                  <div class="card-content card-content-comments">
                    <span class="card-title card-title-comments">
                      <strong class="title-general-comments">
                          Opinión general
                          
                          <i class="material-icons right wait-validation-general-opinion tooltipped" data-position="bottom" data-tooltip="En espera de validación">update</i>
                          <i class="material-icons right validation-general-opinion tooltipped" data-position="bottom" data-tooltip="Opinión general validada">check</i>
                          <a class="btn-floating btn-small btn-add-general-opinion  waves-effect blue   darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar opinión general"      href="#ModalAddModifyGeneralOpinion"><i class="material-icons">add</i></a>
                          <a class="btn-floating btn-small btn-edit-general-opinion waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar la opinión general" href="#ModalAddModifyGeneralOpinion"><i class="material-icons">edit</i></a>
                      </strong>
                    </span>

                    <h6 class="OG_SinInfo">Sin información registrada</h6>
                    <textarea disabled id="txtMainOpinionGeneral" class="materialize-textarea"></textarea>
                    
                    <div class="ValidatorObservationContainer OpinionGeneralObservaciones-Container">
                      <div class="observation-body OpinionGeneral-ObservacionesBody">
                        <h5>
                          <span class="ValidatorObservation-title">Observación realizada:</span>
                          <a class="btn-floating btn-small btnOpinionGeneral-AddObservation waves-effect orange darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Marcar como atendida" href="#ModalOGAtendedObservation"><i class="material-icons">launch</i></a>
                        </h5>

                        <textarea disabled id="txtOpinionGeneral-ValidatorObservation" class="materialize-textarea"></textarea>
                      </div>

                      <!--
                      <div class="no-observation-body OpinionGeneral-NoObservacionesBody">
                            <h5 class="NoValidatorObservation-title">
                              Sin observaciones
                            </h5>
                      </div>-->
                    </div>

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

                <!-- MODAL PARA AGREGAR/MODIFICAR LA INFORMACIÓN SOBRE "OPINIÓN GENERAL"-->
                <div id="ModalOGAtendedObservation" class="modal modal-add-opinion-general modal-fixed-footer">
                  <div class="modal-content">
                      <h3 class="title-modal-add-project-info">Marcar observación como atendida</h3>
                  </div>

                  <div class="modal-footer">
                    <a href="#!" class="btn-small waves-effect green darken-2 btn-validate-observation-OG"><i class="material-icons left">send</i>Atender observación</a>
                    <a href="#!" class="modal-close modal-close-rounded-form btn-small waves-effect grey lighten-1"><i class="material-icons left">close</i>Cerrar</a>
                  </div>
                </div>

                <!-- MODAL PARA AGREGAR/MODIFICAR LA INFORMACIÓN SOBRE "OPINIÓN GENERAL"-->
                <div id="ModalAddModifyGeneralOpinion" class="modal modal-add-opinion-general modal-fixed-footer">
                  <div class="modal-content">
                    
                      <!--<h5 class="title-modal-add-project-info">Información de la opinión general </h5>-->
                      
                      <div class="row m-b0">                
                          <div class="col l12 m12 s12">
                              <h4 class="title-GeneralOpinion">Opinión general:</h4>

                              <div class="input-field">
                                  <textarea id="txtOpinionGeneralModal" class="materialize-textarea" placeholder="Opinion General"></textarea>
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="modal-footer">
                    <a href="#!" class="btn-small waves-effect green darken-2 btn-send-validation-general-opinion left"><i class="material-icons left">send</i>Validar información</a>

                    <a href="#!" class="btn-small waves-effect blue darken-2 btn-create-general-opinion"><i class="material-icons left">save</i>Guardar</a>
                    <a href="#!" class="btn-small waves-effect blue darken-2 btn-modify-general-opinion"><i class="material-icons left">edit</i>Modificar</a>
                    <a href="#!" class="modal-close btn-small waves-effect grey lighten-1"><i class="material-icons left">close</i>Cancelar</a>
                  </div>
                </div>

                <!-- MODAL PARA MODIFICAR LA INFORMACIÓN DEL TITULO DE LOS COMENTARIOS ESPECIFICOS POR TEMA -->
                <div id="ModalModifyGeneralSpecificComments_Titulo" class="modal modal-add-opinion-general modal-fixed-footer">
                  <div class="modal-content">
                    
                      <!--<h5 class="title-modal-add-project-info">Información de la opinión general </h5>-->
                      
                      <div class="row m-b0">                
                          <div class="col l12 m12 s12">
                              <h4><strong>Comentarios y observaciones específicos por tema</strong></h4>

                              <div class="input-field">
                                  <textarea id="txtComentariosPorTemaTitulo" class="materialize-textarea" placeholder="Comentarios y observaciones específicos por tema"></textarea>
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="modal-footer">
                    <a href="#!" class="btn-small waves-effect yellow darken-2 btn-modify-portema-titulo">Modificar información</a>
                    <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
                  </div>
                </div>

                <!-- MODAL PARA MODIFICAR UN TEMA EN ESPECÍFICO Y SU INFORMACIÓN -->
                <div id="ModalModifyDataTheme" class="modal modal-add-opinion-general modal-fixed-footer">
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
                                  <div class="col l9">
                                      <h5 class="title-ObservacionValidador">Observación del validador </h5>

                                      <h6 class="NoValidatorComment"><br>Sin observaciones del validador</h6>
                                      <div class="input-field InputFieldValidatorComment">
                                          <textarea disabled id="txtModalObservacionValidador" class="materialize-textarea"></textarea>
                                      </div>

                                      <i class="estatus-observacion-enviada-container"> Estatus: <i class="status-observacion-enviada"></i> </i><br>
                                      <!--<a class="waves-effect waves-light btn btn-send-for-validation blue darken-3 ">Enviar para validación <i class="material-icons right">send</i></a>-->
                                      <br>
                                  </div>
                              </div>

                              <p class="id_observacion_modal"></p>
                          </div>
                      </div>

                  </div>

                  <div class="modal-footer">
                    <a href="#!" class="btn-small waves-effect yellow darken-2 btn-modify-tema-especifico">Actualizar y enviar para validación</a>
                    <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
                  </div>
                </div>

            <div id="plan_de_mejora"></div>
            <div id="formalizacion"></div>

        </div>

        <div class="col l1"></div>
      </div>

    <?php require_once("footer.html") ?>

    <!-- Moment JS library 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>-->
    
    <!-- JQuery library -->
    <script src="Resource/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Materialize CSS Framework -->
    <script src="Resource/Materialize/materialize.min.js"></script>

    <!-- Scripts of JS -->
    <script src="Resource/js/home_capturista.js"></script>
</body>
</html>
