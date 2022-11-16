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
      
      <div class="row">
        <div class="col l1"></div>

        <div class="col l10">

            <!--    SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
            <div id="informacion_general">

                <div class="row">
                    <div class="col l6">
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

                    <div class="col l6">
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

                              <a class="btn-floating btn-small btn-add-tema  waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar nuevo tema" href="#ModalAddModifyDataTheme"><i class="material-icons">add</i></a>
                          </h4>
                        </strong>
                      </span>
                      <br>

                      <!--
                      <div class="row ComentarioYObservaciones-title-container">
                        <div class="col l11 m11 s10">
                          <textarea disabled id="ComentariosObservacionesEspecificosPorTema_Titulo" class="materialize-textarea"></textarea>
                        </div>
                        <div class="col l1 m1 s1 align-button-com-obs-por-tema">
                          <a class="btn-floating btn-small btn-edit-specific-comments-title waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar el titulo de la sección" href="#ModalModifyGeneralSpecificComments_Titulo"><i class="material-icons">edit</i></a>
                        </div>
                      </div>
                      -->

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

                <!-- MODAL PARA MODIFICAR LA INFORMACIÓN DEL TITULO DE LOS COMENTARIOS ESPECIFICOS POR TEMA
                <div id="ModalModifyGeneralSpecificComments_Titulo" class="modal modal-add-opinion-general modal-fixed-footer">
                  <div class="modal-content">
                      
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
                -->

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
                                          <a class="btn-floating btn-small btnTema-AtendedObservation waves-effect orange darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Marcar como atendida" href="#ModalOGAtendedObservation"><i class="material-icons">launch</i></a>
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
                    <a href="#!" class="btn-small waves-effect green darken-2 btn-send-to-validate-tema left">Enviar para validación <i class="material-icons left">send</i> </a>
                    <a href="#!" class="btn-small waves-effect blue darken-2 btn-modify-tema-especifico">Guardar <i class="material-icons left">save</i> </a>
                    <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar <i class="material-icons left">close</i> </a>
                  </div>
                </div>

<!--
            <div id="plan_de_mejora"></div>
            <div id="formalizacion"></div>
-->

            <!--    SECCIÓN PARA EL PLAN DE MEJORA POR PARTE DEL ENCARGADO DEL PROGRAMA -->
        <div id="plan_de_mejora">

          <div class="row ">
              <div class="col l1"></div>
              <div class="col l10">
                  <div class="card card-RecomendacionesAComprometer">
                      <div class="card-content card-content-mejoras">
                      
                        <span class="card-title">
                              <h5 class="no-data-recomendaciones-a-comprometer">
                                  Sin recomendaciones a comprometer
                                  <!--<a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>-->
                              </h5>
                              <h5 class="with-data-recomendaciones-a-comprometer">
                                  Recomendaciones a comprometer
                                  <!--<a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>-->
                              </h5>
                          </span>

                          <table class="highlight TableAComprometer">
                            <thead>
                              <tr>
                                  <th class="table-status">Estado</th>
                                  <th class="table-Id_Recomendacion">   No.</th>
                                  <th class="table-ASM">                Aspectos Susceptibles de Mejora/Recomendaciones</th>
                                  <th class="table-ActoresSolucion">    Actores involucrados en la solución</th>
                                  <th class="table-Prioridad">          Nivel de prioridad</th>
                                  <th class="table-AccionMejora">       Acción de mejora</th>
                                  <th class="table-AreaResponsable">    Área responsable</th>
                                  <th class="table-Fecha">              Fecha compromiso de cumplimiento</th>
                                  <th class="table-Resultados">         Resultados esperados</th>
                                  <th class="table-Evidencias">         Evidencias</th>
                              </tr>
                            </thead>

                            <tbody class="TableBody-RecomendacionesAComprometer"></tbody>
                          </table>

                      </div>
                  </div>
              </div>
              <div class="col l1"></div>
          </div>

          <div class="row">
              <div class="col l1"></div>
              <div class="col l10">
                  <div class="card card-RecomendacionesAtendidas">
                      <div class="card-content card-content-mejoras">
                      
                          <span class="card-title">
                              <h5 class="no-data-recomendaciones-atendidas">
                                  Sin recomendaciones atendidas
                                  <a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>
                              </h5>
                              <h5 class="with-data-recomendaciones-atendidas">
                                  Recomendaciones atendidas
                                  <!--<a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>-->
                              </h5>
                          </span>

                          <table class="highlight TableAtendidas">
                            <thead>
                              <tr>
                                  <th class="table-No-RecomendationAtended center-align ">No.</th>
                                  <th class="table-ASM-atendidas center-align           ">Aspectos Susceptibles de Mejora/Recomendaciones</th>
                                  <th class="table-documento-evidencia center-align     ">Evidencia</th>
                                  <!--<th class="table-observaciones">Observaciones del validador</th>-->
                                  <th class="table-IconAtended"></th>
                                  <!--<th> COLUMNA PARA MOSTRAR EL ICONO INDICADOR DE UNA OBSERVACIÓN </th>-->
                              </tr>
                            </thead>

                            <tbody class="TableBody-RecomendacionesAtendidas">
                            </tbody>
                          </table>

                      </div>
                  </div>
              </div>
              <div class="col l1"></div>
          </div>

          <div class="row">
              <div class="col l1"></div>
              <div class="col l10">      
                  <div class="card card-RecomendacionesRechazadas">
                      <div class="card-content card-content-mejoras">
                      
                          <span class="card-title">
                              <h5 class="no-data-recomendaciones-rechazadas">
                                  Sin recomendaciones rechazadas
                                  <a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>
                              </h5>
                              <h5 class="with-data-recomendaciones-rechazadas">
                                  Recomendaciones rechazadas
                                  <!--<a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>-->
                              </h5>
                          </span>

                          <table class="highlight TableRechazadas">
                            <thead>
                              <tr>
                                  <th class="center-align table-no-recomendation-refused">No.</th>
                                  <th class="center-align table-ASM-atendidas">Aspectos Susceptibles de Mejora/Recomendaciones</th>
                                  <th class="center-align table-documento-evidencia">Justificación</th>
                                  <th class="center-align table-icon-recomendation-refused"></th>
                              </tr>
                            </thead>

                            <tbody class="TableBody-RecomendacionesRechazadas">
                            </tbody>
                          </table>

                      </div>
                  </div>
              </div>
              <div class="col l1"></div>
          </div>

        </div>

            <!-- MODAL PARA AGREGAR NUEVA RECOMENDACION AL PROYECTO -->
            <div id="ModalAddModifyPlanMejora" class="modal modal-add-opinion-general modal-fixed-footer">
              <div class="modal-content">
                
                  <h5 class="title-modal-add-project-info">Aspectos Susceptibles de mejora y recomendaciones del proyecto </h5>
                  
                  <div class="row m-b0">
                      <div class="col l1 m1 s1">
                          <h6><strong>No.</strong></h6>

                          <div class="input-field">
                              <input disabled placeholder="No" id="txtNumRecomendation" type="text" class="validate center-align">
                          </div>
                      </div>

                      <div class="col l5 m5 s5">
                          <h6><strong>Aspecto Susceptible de Mejora/Recomendación</strong></h6>

                          <div class="input-field">
                              <textarea id="txtASM" class="materialize-textarea" placeholder="Aspecto Susceptible de Mejora/Recomendación"></textarea>
                          </div>
                      </div>

                      <div class="col l6 m6 s6">
                          <div class="row">
                            <div class="col l12">
                                <h6><strong>Actores involucrados en la solución:</strong></h6>

                                <div class="input-field">
                                    <textarea placeholder="Solución" id="txtActoresInvolucrados" class="materialize-textarea" type="text" class="validate"></textarea>
                                </div>
                            </div>

                            <div class="col l4 m4 s4">
                                <h6><strong>Nivel de prioridad:</strong></h6>
                                <select id="select-nivel-prioridad" class="browser-default">
                                  <option value="" disabled selected>Prioridad</option>
                                  <option value="1">Baja</option>
                                  <option value="2">Media</option>
                                  <option value="3">Alta</option>
                                </select>
                            </div>

                            <div class="col l4 m4 s4">
                                <h6><strong>Estatus actual:</strong></h6>
                                <select id="select-estatus" class="browser-default">
                                  <option value="" disabled selected>Seleccione</option>
                                  <option value="1">Atendido</option>
                                  <option value="2">En proceso</option>
                                  <option value="3">Sin atender</option>
                                </select>
                            </div>

                            <div class="col l4 m4 s4">
                                  <h6><strong>Fecha:</strong></h6>

                                  <input type="date" class="browser-default datepicker-fecha-cumplimiento" required pattern="\d{2}-\d{2}-\d{4}"/>
                                  <!--<input placeholder="Fecha de cumplimiento" id="txtFecha" type="text" class="validate center-align">-->
                            </div>
                            
                          </div>

                      </div>
                  </div>

                  <div class="row row-m-b-0">
                      <div class="col l1 m1"></div>
                      <div class="col 5 m5 s5">
                          <div class="row">
                              <div class="col l12 m12 s12">
                                  <h6><strong>Acción de mejora:</strong></h6>

                                  <div class="input-field">
                                      <textarea id="txtAccionMejora" class="materialize-textarea" placeholder="Acción de mejora"></textarea>
                                  </div>
                              </div>

                              <div class="col l12 m12 s12">
                                  <h6><strong>Resultados esperados:</strong></h6>

                                  <div class="input-field">
                                      <textarea placeholder="Área resposable" id="txtResultadosEsperados" class="materialize-textarea"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col l6 m6 s6">
                          <div class="row">
                              <div class="col l12 m12 s12">
                                  <h6><strong>Área responsable:</strong></h6>

                                  <div class="input-field">
                                      <textarea id="txtAreaResponsable" class="materialize-textarea" placeholder="Área resposable"></textarea>
                                  </div>
                              </div>

                              <div class="col l12 m12 s12">
                                  <h6><strong>Evidencias solicitadas:</strong></h6>

                                  <div class="input-field">
                                      <textarea placeholder="Evidencias" id="txtEvidenciasSolicitadas" class="materialize-textarea"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

              <div class="modal-footer">
                <a href="#!" class="btn-small waves-effect blue darken-2 btn-insert-recomendacion">Agregar información</a>
                <a href="#!" class="btn-small waves-effect yellow darken-3 btn-update-recomendacion">Guardar información</a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
              </div>
            </div>

            <!-- MODAL PARA AGREGAR NUEVA RECOMENDACION AL PROYECTO -->
            <div id="ModalDeleteRecomendation" class="modal modal-delete-recomendation modal-fixed-footer">
              <div class="modal-content">

                  <h4>¿Eliminar esta recomendación?</h4><br>
                  
                  <table class="highlight table-plan-de-mejora-delete">
                    <thead>
                      <tr>
                          <th class="table-delete-status">Estado</th>
                          <th class="table-delete-Id_Recomendacion">   No.</th>
                          <th class="table-delete-ASM">                Aspectos Susceptibles de Mejora/Recomendaciones</th>
                          <th class="table-delete-ActoresSolucion">    Actores involucrados en la solución</th>
                          <th class="table-delete-Prioridad">          Nivel de prioridad</th>
                          <th class="table-delete-AccionMejora">       Acción de mejora</th>
                          <th>...</th>
                      </tr>
                    </thead>

                    <tbody class="table-body-content-mejoras-delete"></tbody>
                  </table>

                  <h5 class="title-modal-add-project-info"> </h5>
                
                  <h6 class="info-recomendation-delete"></h6>              

              </div>

              <div class="modal-footer">
                <a href="#!" class="btn-small waves-effect red darken-3 btn-delete-recomendation">Borrar recomendación</a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
              </div>
            </div>

            <!-- MODAL PARA MOSTRAR LAS OBSERVACIONES HECHAS POR EL VALIDADOR A LAS RECOMENDACIONES -->
            <div id="ModalShowObservation" class="modal modal-fixed-footer">
              <div class="modal-content">

                  <h4>Observación del validador</h4>
                  <p class="ObservationInRecomendation">
                  </p>
                  <p class="num_recomendation_a_comprometer"></p>

              </div>

              <div class="modal-footer">
                <div class="RecomendationObservation_StatusContainer">
                  <i class="RecomendationObservation_Status"> Estatus: <i class="RecomendationObservation_StatusValue"></i> </i><br>
                </div>

                <a href="#!" class="btn-small waves-effect light-blue darken-3 btn-update-observation-a-comprometer mr-10px">Enviar para validación <i class="material-icons right">send</i></a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1 mr-20px">Cerrar</a>
              </div>
            </div>

            <!-- MODAL PARA MOSTRAR LAS OBSERVACIONES HECHAS POR EL VALIDADOR A LAS RECOMENDACIONES -->
            <div id="ModalShowAtendedRecomendation" class="modal modal-fixed-footer">
              <div class="modal-content">
                <div class="row">

                  <div class="col s12 m12 l12">
                      <h5><strong>Aspectos Susceptibles de Mejora/Recomendaciones</strong></h5>
                      <textarea disabled class="txtASM-AtendedRecomendation materialize-textarea"></textarea>

                      <h5><strong>Evidencia</strong></h5>
                      <textarea disabled class="txtEvidencia-AtendedRecomendation materialize-textarea"></textarea>
                      <p class="num_recomendation_atendidas"></p>
                  </div>

                  <div class="col s12 m12 l12">
                      <div class="ValidatorObservation-AtendedRecomendation-Container">
                          <h5><strong>Observación del validador:</strong></h5>
                          <textarea disabled class="txtValidatorObservation-AtendedRecomendation materialize-textarea"></textarea>                        
                      </div>
                  </div>

                </div>
              </div>

              <div class="modal-footer">
                <div class="RecomendationObservation_StatusContainer">
                  <i class="RecomendationObservation_Status"> Estatus: <i class="RecomendationObservation_StatusValue"></i> </i><br>
                </div>

                <a href="#!" class="btn-small waves-effect light-blue darken-3 btn-update-recomendation-atended mr-10px">Enviar para validación <i class="material-icons right">send</i></a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1 mr-20px">Cerrar</a>
              </div>
            </div>

            <!-- MODAL PARA MOSTRAR LAS OBSERVACIONES HECHAS POR EL VALIDADOR A LAS RECOMENDACIONES -->
            <div id="ModalShowRefusedRecomendation" class="modal modal-delete-recomendation modal-fixed-footer">
              <div class="modal-content">

                <div class="row">
                  <div class="col s12 m12 l12">
                      <h5><strong>Aspectos Susceptibles de Mejora/Recomendaciones</strong></h5>
                      <textarea disabled class="txtASM-RefusedRecomendation materialize-textarea"></textarea>

                      <h5><strong>Justificación</strong></h5>
                      <textarea disabled class="txtJustification-RefusedRecomendation materialize-textarea"></textarea>
                  </div>
                  <p class="num_recomendation_refused"></p>

                  <div class="col s12 m12 l12">
                      <div class="ValidatorObservation-RefusedRecomendation-Container">
                          <h5><strong>Observación del validador:</strong></h5>
                          <textarea disabled class="txtValidatorObservation-RefusedRecomendation materialize-textarea"></textarea>    
                      </div>
                  </div>
                </div>        

              </div>

              <div class="modal-footer">
                <div class="RecomendationObservation_StatusContainer">
                  <i class="RecomendationObservation_Status"> Estatus: <i class="RecomendationObservation_StatusValue"></i> </i><br>
                </div>

                <a href="#!" class="btn-small waves-effect light-blue darken-3 btn-update-observation-refused mr-10px">Enviar para validación <i class="material-icons right">send</i></a>
                <a href="#!" class="modal-close btn-small waves-effect grey lighten-1 mr-20px">Cerrar</a>
              </div>
            </div>

        <!--    SECCIÓN PARA LOS DOCUMENTOS CREADOS POR PARTE DEL ENCARGADO DEL PROGRAMA ##### -->
        <div id="formalizacion">

        <div class="container">

          <div class="card card-documents">
            <div class="card-content">

                <span class="card-title">
                  <strong class="card-title-documents">Docs</strong>
                </span>

                <div class="row">
                  <div class="col l5 m5 s12">
                      <ul class="collection collection-documents"></ul>
                  </div>

                  <div class="col l7 m7 s12">
                      <!--<a class="waves-effect blue darken-2 btn btn-small btn-upload-documents btn-rounded right modal-trigger" href="#modal-upload-document"><i class="material-icons left">cloud_upload</i>Subir nuevo documento</a>-->
                      <a class="waves-effect blue darken-2 btn btn-small btn-generate-documents btn-rounded right"><i class="material-icons left">cached</i>Generar documentos</a>
                      <!--<a class="waves-effect  red darken-2 btn btn-small btn-del-documents    btn-rounded right"><i class="material-icons left">delete</i>Borrar documentos</a>-->

                      <div class="document-sign-container">
                        <strong>Nombre del documento:</strong> <br>
                        <p class="NombreDocumento"></p> <br>

                        <div class="row m-b0">
                          <div class="col l6 m6 s12">
                              <strong>Fecha de subida:</strong> <br> 
                              <p class="FechaSubida"></p> <br>
                          </div>
                          <div class="col l6 m6 s12">
                              <strong>Hora de subida:</strong> <br>
                              <p class="HoraSubida"></p>
                          </div>
                        </div>

                        <!--
                        <a class='waves-effect blue   darken-2  btn-floating btn-medium  btn-show-signed-document   right tooltipped' ata-position="bottom" data-tooltip="Ver documento"><i class='material-icons left'>open_in_browser</i>Ver documento</a>
                        <a class='waves-effect yellow darken-2  btn-floating btn-medium  btn-update-signed-document right tooltipped' ata-position="bottom" data-tooltip="Actualizar documento"><i class='material-icons left'>edit</i>Enviar para validación</a>
                        -->
                        <a class='waves-effect green  darken-2  btn-floating btn-medium  btn-send-validation        right tooltipped' ata-position="bottom" data-tooltip="Enviar para validación"><i class='material-icons left'>upload</i>Enviar para validación</a>
                      </div>

                      <div class="document-evidence">

                        <h5>Subir documento firmado:</h5>
                        <p class="id_doc2sign"></p>

                        <form action="#">
                          <div class="file-field input-field">
                            <div class="btn btn-rounded green darken-2">
                              <span>Subir <i class="material-icons left">cloud_upload</i></span>
                              <input id="fileDoc" type="file">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="txt-show-name-file file-path validate" type="text">
                            </div>
                          </div>
                        </form>

                        <a class="waves-effect green darken-2 btn btn-small btn-upload-doc-formalice btn-rounded right"><i class="material-icons left">upload</i>Subir documento</a>

                      </div>
                      
                  </div>
                </div>

            </div>
          </div>

        </div>
        </div>

      <!-- Modal subir documento-->
      <div id="modal-upload-document" class="modal modal-fixed-footer">
        <div class="modal-content">

          <h5 class="">Seleccione un documento</h5><br><br>

          <div class="row">
              <div class="col l2 m2 s2">
                
                <div class="file-field input-field field-upload-document">
                    <div class="btn btn-rounded blue darken-3" data-position="bottom" data-tooltip="Seleccionar documento">
                      <span><i class="material-icons">cloud_upload</i></span>
                      <input type="file" class="form-control-update-file" name="doc" id="fileDoc"> 
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate file-path-input-hide" type="text">
                    </div>
                </div>

              </div>
              
              <div class="input-field col l7 m7 s7">
                <input disabled placeholder="Nombre" id="txtNameFile" type="text" class="validate">
                <label class="lblNameFile" for="txtNameFile">Nombre del archivo</label>
              </div>

              <div class="input-field col l3 m3 s3">
                <input disabled placeholder="Extensión" id="txtExtension" type="text" class="validate center-align">
                <label for="first_name">Extensión</label>
              </div>
          </div>

        </div>
        <div class="modal-footer">
          <a class="waves-effect blue darken-2 btn btn-load-doc-server btn-rounded">Subir documento</a>
          <a class="modal-close waves-effect grey btn btn-rounded">Cancelar</a>
        </div>
      </div>

      <!-- Modal para visualizar los documentos generados -->
      <div id="modal-show-document" class="modal modal-fixed-footer">
        <div class="modal-content modal-content-show-document">
            <div class="show-pdf-document">
              
            </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect grey btn btn-rounded">Cerrar</a>
        </div>
      </div>

      <!-- Modal modificar documento-->
      <div id="modal-edit-document" class="modal modal-fixed-footer">
        <div class="modal-content">

          <h5 class="">Edite el documento seleccionado</h5><br><br>

          <div class="row">
            <!--
              <div class="col l2 m2 s2">
                <div class="file-field input-field field-upload-document">
                    <div class="btn btn-rounded yellow darken-3 tooltipped" data-position="bottom" data-tooltip="Cambiar documento">
                      <span><i class="material-icons">cloud_upload</i></span>
                      <input type="file" class="form-control-file" name="doc" id="fileUpdateDoc"> 
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate file-path-input-hide" type="text">
                    </div>
                </div>
              </div>
              -->

              <div class="input-field col l6 m6 s6">
                <input placeholder="Nombre" id="txt-EditNameFile" type="text" class="validate">
                <label id="iddoc_modify_modal"></label>
                <label class="lblNameFile" for="txt-EditNameFile">Nombre del archivo</label>
              </div>

              <div class="input-field col l2 m2 s2">
                <input disabled placeholder="Extensión" id="txt-EditExtension" type="text" class="validate center-align">
                <label for="first_name">Extensión</label>
              </div>

              <div class="col l4 m4 s4">
                  <label>Estado del documento</label>
                  <select id="select-estatus-document" class="browser-default">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="1">Nuevo</option>
                    <option value="2">Aprobado</option>
                    <option value="3">En revisión</option>
                    <option value="4">Con recomendaciones</option>
                  </select>
              </div>

          </div>

        </div>
        <div class="modal-footer">
          <a class="waves-effect yellow darken-2 btn btn-modify-document btn-rounded">Actualizar documento</a>
          <a class="modal-close waves-effect grey btn btn-rounded">Cancelar</a>
        </div>
      </div>

      <!-- Modal eliminar documento-->
      <div id="modal-delete-document" class="modal modal-fixed-footer">
        <div class="modal-content">

          <span id="iddoc_modal"></span>
          <h5 class="">¿Está seguro de borrar el documento <span class="name-delete-file"></span> de su proyecto? </h5><br><br>

        </div>
        <div class="modal-footer">
          <a class="waves-effect red darken-2 btn btn-delete-project-document btn-rounded">Borrar documento</a>
          <a class="modal-close waves-effect grey btn btn-rounded">Cancelar</a>
        </div>
      </div>

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

    <!-- Header menu script -->
    <script src="Resource/js/header_menu.js"></script>

    <!-- Scripts of JS -->
    <script src="Resource/js/home_capturista.js"></script>
</body>
</html>

