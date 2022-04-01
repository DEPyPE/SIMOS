<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de Monitoreo y Seguimiento a Recomendaciones (SIMOS) / Proyecto Horizonte de Oportunidades </title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Resource/Materialize/materialize.min.css"> 
	<link rel="stylesheet" type="text/css" href="Resource/css/home_epp.css">
</head>
<body>

    <nav class="nav-extended light-blue darken-4">
        <div class="nav-wrapper">
            <div class="row row-menu-and-title">
                <div class="col l1"></div>
                <div class="col l10">
                    <a href="#" class="brand-logo white-text"> <img class="seg-logo left" src="Resource/files/images/seg-logo.jpeg"> <strong class="main-title-project truncate">SIMOS </strong> </a>
<!--                <a href="" class="brand-logo">Horizonte de oportunidades<i class="large material-icons icon-title left">assignment</i></a> -->
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
<!--                        <li><a href="notificaciones.html"><i class="material-icons left">notifications_none</i>Notificaciones<span class="notification-alert">5</sspan></a></li>-->
                        <li><a href="index.php" class="close-session"><i class="material-icons left icon-exit-session">exit_to_app</i>Cerrar sesión</a></li>
<!--
                        <li><a href=""><i class="material-icons left">home</i>Inicio</a></li>
                        <li><a class="dropdown-trigger" data-target="menu-contenido-evaluacion">Menú de opciones<i class="material-icons right">keyboard_arrow_down</i></a></li>
-->
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
                        <li class="tab"><a href="#general_information">Información general</a></li>
                        <li class="tab"><a href="#opinion_general">Opinión general</a></li>
                        <li class="tab"><a class="active" href="#plan_de_mejora">Plan de mejora</a></li>
                        <li class="tab"><a href="#documents">Documentos y Recomendaciones</a></li>
                    </ul>
                </div>
                <div class="col l1"></div>
            </div>
        </div>
      </nav>

<!--    SECCIÓN PARA LA INFORMACIÓN GENERAL DEL PROGRAMA SOCIAL -->
        <div id="general_information">

            <div class="row">
                <div class="col l1"></div>
                
                <div class="col l5">
                    <div class="card card-program">
                        <div class="card-content card-content-ft-proyecto">
                            
                            <span class="card-title card-title-ficha-tecnica">
                                <h5>
                                  <strong>Ficha técnica del programa</strong>
                                  <a class="btn-floating btn-small btn-add-project-information  waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar información del proyecto" href="#ModalAddModifyTechnicalProjectInfo"><i class="material-icons">add</i></a>
                                  <a class="btn-floating btn-small btn-edit-project-information waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar información del proyecto" href="#ModalAddModifyTechnicalProjectInfo"><i class="material-icons">edit</i></a>
                                </h5>
                            </span>
                            
                            <table class="striped table-ficha-tecnica-proyecto">
                                <tbody>
                                  <tr>
                                    <td class="title-column"><strong>Programa social:</strong></td>
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
                        </div>
                    </div>
                </div>

                <div class="col l5">
                    <div class="card card-evaluation">
                        <div class="card-content card-content-evaluation">
                            <span class="card-title card-title-ficha-tecnica">
                                <h5>
                                  <strong>
                                    Ficha técnica de la evaluación
                                    <a class="btn-floating btn-small btn-add-evaluation-information waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar información de la evaluación" href="#ModalAddModifyTechnicalEvaluationInfo"><i class="material-icons">add</i></a>
                                    <a class="btn-floating btn-small btn-edit-evaluation-information waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar información de la evaluación" href="#ModalAddModifyTechnicalEvaluationInfo"><i class="material-icons">edit</i></a>
                                  </strong>
                                </h5>
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
                        </div>
                    </div>
                </div>

                <div class="col l1"></div>
            </div>

        </div>

        <!-- MODAL PARA AGREGAR INFORMACIÓN SOBRE EL PROYECTO -->
        <div id="ModalAddModifyTechnicalProjectInfo" class="modal modal-add-project-info modal-fixed-footer">
          <div class="modal-content">
            
              <h5 class="title-modal-add-project-info">Información del programa ó proyecto</h5>
              
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
                          <input placeholder="Dependencia responsable" id="txtDepen" type="text" class="validate">
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
                          <input placeholder="Unidad responsable" id="txtUR" type="text" class="validate">
                      </div>
                  </div>

                  <div class="col l4 m4 s12">
                      <h6><strong>Siglas de la UR:</strong></h6>

                      <div class="input-field">
                          <input placeholder="Siglas de la UR" id="txtSiglasUR" type="text" class="validate">
                      </div>
                  </div>
              </div>

              <div class="row m-b0">
                  <div class="col l8 m8 s6">
                      <h6><strong>Reponsable del proyecto</strong></h6>

                      <div class="input-field">
                          <input placeholder="Reponsable del proyecto" id="txtResponsable" type="text" class="validate">
                      </div>
                  </div>


              </div>

          </div>

          <div class="modal-footer">
            <a class="btn-small waves-effect blue darken-2 btn-save-project-information">Guardar información</a>
            <a class="btn-small waves-effect yellow darken-3 btn-update-project-information">Actualizar información</a>
            <a class="btn-small waves-effect grey lighten-1 modal-close">Cancelar</a>
          </div>
        </div>

        <!-- MODAL PARA AGREGAR INFORMACIÓN SOBRE LA EVALUACIÓN -->
        <div id="ModalAddModifyTechnicalEvaluationInfo" class="modal modal-add-evaluation-info modal-fixed-footer">
          <div class="modal-content">
            
              <h5 class="title-modal-add-project-info">Información de la evaluación</h5>
              
              <div class="row m-b0">                
                  <div class="col l5 m5 s12">
                      <h6><strong>Nombre de la instancia evaluadora:</strong></h6>

                      <div class="input-field">
                          <input placeholder="Instancia evaluadora" id="txtInstanciaEvaluadora" type="text" class="validate">
                      </div>
                  </div>

                  <div class="col l4 m4 s12">
                      <h6><strong>Nombre de la evaluación:</strong></h6>
                      <div class="input-field">
                          <input placeholder="Nombre de la evaluación" id="txtNombreEvaluacion" type="text" class="validate">
                      </div>
                  </div>

                  <div class="col l3 m3 s12">
                      <h6><strong>Año de la evaluación:</strong></h6>

                      <div class="input-field">
                          <input placeholder="Año evaluación" id="txtYearEvaluation" class="center-align" type="text" class="validate">
                      </div>
                  </div>
              </div>

              <div class="row m-b0">
                  <div class="col l4 m4 s12">
                      <h6><strong>Tipo de evaluación:</strong></h6>

                      <div class="input-field">
                          <input placeholder="Tipo de evaluación" id="txtTipoEvaluacion" type="text" class="validate">
                      </div>
                  </div>

                  <div class="col l4 m4 s12">
                      <h6><strong>Nombre del informe:</strong></h6>

                      <div class="input-field">
                          <input placeholder="Informe" id="txtNombreInforme" type="text" class="validate">
                      </div>
                  </div>

                  <div class="col l4 m4 s12">
                      <h6><strong>Costo de la evaluación:</strong></h6>

                      <div class="input-field">
                          <input placeholder="Costo de la evaluación" id="txtCostoEvaluacion" class="center-align" type="text" class="validate">
                      </div>
                  </div>
              </div>

          </div>

          <div class="modal-footer">
            <a class="btn-small waves-effect blue darken-2   btn-insert-evaluation-information">Agregar información</a>
            <a class="btn-small waves-effect yellow darken-3 btn-update-evaluation-information">Actualizar información</a>
            <a class="btn-small waves-effect grey lighten-1 modal-close">Cancelar</a>
          </div>
        </div>

<!--    SECCIÓN PARA LA OPINIÓN GENERAL POR PARTE DEL ENCARGADO DEL PROGRAMA -->
        <div id="opinion_general">
            <div class="row">

              <div class="col m2 l2"></div>
              <div class="col s12 m8 l8">

                  <div class="card">

                    <div class="card-content card-content-comments">
                      <span class="card-title card-title-comments">
                        <strong>
                          <h4 class="title-general-comments">
                            Comentarios y observaciones generales
                            <a class="btn-floating btn-small btn-add-opinion-general waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar comentarios y observaciones <br> generales y específicos por tema" href="#ModalAddOpinionGeneral"><i class="material-icons">add</i></a>
                            <a class="btn-floating btn-small btn-edit-general-comments waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar los comentarios <br> y observaciones generales" href="#ModalModifyGeneralSpecificComments"><i class="material-icons">edit</i></a>
                          </h4>
                        </strong>
                      </span>
                      <!-- <a class="btn-floating btn-small right orange"><i class="material-icons">edit</i></a>-->
                      <textarea disabled id="ComentariosObservacionesGenerales" class="materialize-textarea"></textarea>
                      <h6 class="OG_SinInfo">Sin información registrada</h6>
                    </div>

                  </div>

                  <div class="card">
                    <div class="card-content card-content-comments">
                        <span class="card-title card-title-comments">
                          <strong>
                            <h4 class="title-specific-comments">
                                Comentarios y observaciones específicos por tema
                                <a class="btn-floating btn-small btn-edit-specific-comments waves-effect yellow darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Modificar los comentarios y <br> observaciones específicos por tema" href="#ModalModifyGeneralSpecificComments"><i class="material-icons">edit</i></a>
                            </h4>
                          </strong>
                        </span>
                        <!--<a class="btn-floating btn-small right orange"><i class="material-icons">edit</i></a>--> </h5>
                        <textarea disabled id="ComentariosObservacionesPorTema" class="materialize-textarea"></textarea>
                        <h6 class="OG_SinInfo">Sin información registrada</h6>
                    </div>
                  </div>

              </div>
              <div class="col m2 l2"></div>

            </div>
        </div>

        <!-- MODAL PARA AGREGAR INFORMACIÓN SOBRE LA EVALUACIÓN -->
        <div id="ModalAddOpinionGeneral" class="modal modal-add-opinion-general modal-fixed-footer">
          <div class="modal-content">
            
              <!--<h5 class="title-modal-add-project-info">Información de la opinión general </h5>-->
              
              <div class="row m-b0">                
                  <div class="col l12 m12 s12">
                      <h4><strong>Comentarios y observaciones generales:</strong></h4>

                      <div class="input-field">
                          <textarea id="txtObservacionesGenerales" class="materialize-textarea" placeholder="Comentarios y observaciones generales"></textarea>
                      </div>
                  </div>
              </div>

              <div class="row m-b0">                
                  <div class="col l12 m12 s12">
                      <h6><strong>Comentarios y observaciones específicos por tema:</strong></h6>

                      <div class="input-field">
                          <textarea placeholder="Comentarios y observaciones específicos por tema" id="txtPorTema" class="materialize-textarea"></textarea>
                      </div>
                  </div>
              </div>

          </div>

          <div class="modal-footer">
            <a href="#!" class="btn-small waves-effect blue darken-2 btn-insert-opinion-general">Agregar información</a>
            <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
          </div>
        </div>

        <!-- MODAL PARA MODIFICAR LA INFORMACIÓN SOBRE LOS COMENTARIOS GENERALES Y ESPECÍFICOS -->
        <div id="ModalModifyGeneralSpecificComments" class="modal modal-add-opinion-general modal-fixed-footer">
          <div class="modal-content">
            
              <!--<h5 class="title-modal-add-project-info">Información de la opinión general </h5>-->
              
              <div class="row m-b0">                
                  <div class="col l12 m12 s12">
                      <h4><strong>Comentarios y observaciones generales:</strong></h4>

                      <div class="input-field">
                          <textarea id="txtComentarios" class="materialize-textarea" placeholder="Comentarios y observaciones generales"></textarea>
                      </div>
                  </div>
              </div>

          </div>

          <div class="modal-footer">
            <a href="#!" class="btn-small waves-effect yellow darken-2 btn-modify-general-comments">Modificar información</a>
            <a href="#!" class="btn-small waves-effect yellow darken-2 btn-modify-specific-comments">Modificar información</a>
            <a href="#!" class="modal-close btn-small waves-effect grey lighten-1">Cancelar</a>
          </div>
        </div>

<!--    SECCIÓN PARA EL PLAN DE MEJORA POR PARTE DEL ENCARGADO DEL PROGRAMA -->
        <div id="plan_de_mejora">
            <div class="row">
                <div class="col l1"></div>
                <div class="col l10">

                    <div class="card card-content-mejoras">
                        <div class="card-content">

                          <span class="card-title">
                                <h5 class="no-data-recomendaciones">
                                    Sin información registrada
                                    <a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>
                                </h5>
                                <h5 class="with-data-recomendaciones">
                                    Agregar nueva recomendación
                                    <a class="btn-floating btn-small btn-add-plan-mejora waves-effect blue darken-2 tooltipped modal-trigger right" data-position="bottom" data-tooltip="Agregar recomendación" href="#ModalAddModifyPlanMejora"><i class="material-icons">add</i></a>
                                </h5>
                            </span>

                            <table class="highlight">
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

                              <tbody class="table-body-content-mejoras"></tbody>
                            </table>

                        </div>
                    </div>

                    <!--
                    <div class="card card-plan-de-mejora">
                      <div class="card-content">
                          <span class="card-title">
                              
                          </span>

                          <table id="tabla-plan-de-mejora" class="striped">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Aspecto Susceptible de Mejora/Recomendación</th>
                                <th>Respecto al tipo de actores involucrados en solución</th>
                                <th>Nivel de prioridad</th>
                                <th>Acción de mejora</th>
                                <th>Área de responsable</th>
                                <th>Fecha compromismo de cumplimiento</th>
                                <th>Resultados Esperados</th>
                                <th>Evidencias</th>
                              </tr>
                            </thead>
                            <tbody>

                            </tbody>
                          </table>
                      </div>
                    </div>
                    -->
      
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
                          <input placeholder="No" id="txtNumRecomendation" type="text" class="validate center-align">
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
                            <h6><strong>Estatus:</strong></h6>
                            <select id="select-estatus" class="browser-default">
                              <option value="" disabled selected>Estado actual</option>
                              <option value="1">Corregido</option>
                              <option value="2">En proceso</option>
                              <option value="3">Sin antender</option>
                            </select>
                        </div>

                        <div class="col l4 m4 s4">
                              <h6><strong>Fecha:</strong></h6>

                              <div class="input-field txt-fecha-style">
                                  <input placeholder="Fecha de cumplimiento" id="txtFecha" type="text" class="validate center-align">
                              </div>
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
                              <h6><strong>Área responsable:</strong></h6>

                              <div class="input-field">
                                  <textarea id="txtAreaResponsable" class="materialize-textarea" placeholder="Área resposable"></textarea>
                              </div>
                          </div>


                      </div>
                  </div>

                  <div class="col l6 m6 s6">
                      <div class="row">
                          <div class="col l12 m12 s12">
                              <h6><strong>Resultados esperados:</strong></h6>

                              <div class="input-field">
                                  <textarea placeholder="Área resposable" id="txtResultadosEsperados" class="materialize-textarea"></textarea>
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

<!--    SECCIÓN PARA LOS DOCUMENTOS CREADOS POR PARTE DEL ENCARGADO DEL PROGRAMA -->
        <div id="documents">
            <div class="row">
              <div class="col l1"></div>
              <div class="col l10 m12 s12">

                <div class="card">
                  <div class="card-content">

                      <div class="row">
                        <div class="col l5 m5 s12">
                            
                            <span class="card-title"> <strong class="card-title-documents">Docs</strong> </span><br>

                            <ul class="collection collection-documents">

                            </ul>
                        </div>

                        <div class="col l7 m7 s12">
                        <a class="waves-effect blue darken-2 btn btn-small btn-upload-documents btn-rounded right modal-trigger" href="#modal-upload-documenttt"><i class="material-icons left">cloud_upload</i>Subir nuevo documento</a>

                        <ul class="collection collection-document-recomendations">

                        </ul>
                        
                        </div>
                      </div>

                  </div>
                </div>

              </div>

              <div class="col l1"></div>
            </div>
        </div>

        <!-- Modal para mostrar cada recomendación o aspecto susceptible de mejora -->
        <div id="modal-recomendation-description" class="modal">
          <div class="modal-content">
              <h5 class="modal_id_recomendation"></h5>
              
              <strong>Aspecto Susceptible de Mejora/Recomendaciones:</strong>
              <h6 class="modal_apartado"> VI. Matriz de Indicadores para Resultados (MIR). </h6>

              <strong>Respecto al tipo de actores involucrados en solución:</strong>
              <h6 class="modal_rubro">Valoración final de la MIR</h6>

              <strong>Nivel de prioridad:</strong>
              <h6 class="modal_rubro">Medio</h6>

              <strong>Acción de mejora</strong>
              <h6 class="modal_recomendation_info"></h6>

              <strong>Área responsable:</strong>
              <h6 class="modal_rubro">Dirección de planeación</h6>

              <strong>Fecha compromiso de cumplimiento:</strong>
              <h6 class="modal_rubro">22/12/2021</h6>

              <strong>Resultados esperados:</strong>
              <h6 class="modal_rubro">Mejora de los indicadores de 2017</h6>

              <strong>Evidencias:</strong>
              <h6 class="modal_rubro">Fichas técnicas de los indicadores 2018</h6>
          </div>
          <div class="modal-footer">
            <a class=" waves-effect btn green lighten-1 btn-recomendation-complete">Marcar como completada</a>
            <a class="modal-close waves-effect btn red lighten-1  ">Cerrar</a>
          </div>
        </div>

        <!-- Modal para mostrar el informe de la evaluación realizada -->
        <div id="modal1" class="modal modal-informe-evaluacion">
          <div class="modal-content">
            <embed class="documento-informe-evaluacion" src="Resource/files/Formato de posicionamiento_2019.pdf" type="application/pdf"/>
          </div>
          <div class="modal-footer">
            <a class="modal-close waves-effect grey btn">Cerrar</a>
          </div>
        </div>

        <!-- Modal confirmación eliminar documento-->
        <div id="modal-confirm-delete-document" class="modal">
          <div class="modal-content">
            <div class="content-image-modal">
              <img class="img-alert center-align" src="Resource/files/images/alert.png">
            </div>
            <h5 class="text-confirm-delete">¿Está seguro de eliminar este documento?</h5>
          </div>
          <div class="modal-footer">
            <a class="modal-close waves-effect red lighten-2 btn btn-confirm-delete">Aceptar</a>
            <a class="modal-close waves-effect blue lighten-3 btn">Cancelar</a>
          </div>
        </div>

        <!-- Modal subir documento-->
        <div id="modal-upload-document" class="modal">
          <div class="modal-content">

            <div class="content-image-modal">
              <img class="img-upload" src="Resource/files/images/upload.png">
            </div>
            
            <h5 class="center-align">Subir documentos</h5>

            <form action="#">
              <div class="file-field input-field field-upload-document">
                <div class="btn blue">
                  <span>Seleccionar<i class="material-icons left">cloud_upload</i></span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </form>

          </div>
          <div class="modal-footer">
            <a class="modal-close waves-effect blue btn btn-confirm-delete btn-rounded">Subir documento</a>
            <a class="modal-close waves-effect grey btn btn-rounded">Cancelar</a>
          </div>
        </div>

        <!-- Modal modificar documento-->
        <div id="modal-edit-document" class="modal">
          <div class="modal-content">

            <div class="content-image-modal">
              <img class="img-edit-document" src="Resource/files/images/edit_file.png">
            </div>

            <h5 class="center-align">Modificar documento</h5>

            <form action="#">
              <div class="file-field input-field field-upload-document">
                <div class="btn orange lighten-2">
                  <span>Cambiar<i class="material-icons left">edit</i></span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </form>

          </div>
          <div class="modal-footer">
            <a class="modal-close waves-effect orange lighten-2 btn btn-confirm-delete">Subir documento</a>
            <a class="modal-close waves-effect grey btn">Cancelar</a>
          </div>
        </div>

        <!-- Moment JS library 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>-->
        
        <!-- JQuery library -->
        <script src="Resource/jQuery/jquery-3.2.1.min.js"></script>

        <!-- Materialize CSS Framework -->
        <script src="Resource/Materialize/materialize.min.js"></script>

        <!-- Scripts of JS -->
        <script src="Resource/js/home_epp.js"></script>
</body>
</html>

