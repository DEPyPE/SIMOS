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
                        <li class="tab"><a class="active" href="#general_information">Información general</a></li>
                        <li class="tab"><a href="#opinion_general">Opinión general</a></li>
                        <li class="tab"><a href="#plan_de_mejora">Plan de mejora</a></li>
                        <li class="tab"><a href="#documents">Documentos y Recomendaciones</a></li>
                    </ul>
                </div>
                <div class="col l1"></div>
            </div>
        </div>
      </nav>
    
    <!--    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    -->

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
                                  <a class="btn-floating btn-small btn-add-project-information waves-effect blue darken-2 tooltipped right" data-position="bottom" data-tooltip="Agregar información"><i class="material-icons">add</i></a>
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
                        </div>
                    </div>
                </div>

                <div class="col l5">
                    <div class="card card-evaluation">
                        <div class="card-content card-content-evaluation">
                            <span class="card-title card-title-ficha-tecnica">
                                <h5><strong>Ficha técnica de la evaluación</strong></h5>
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
                        </div>
                    </div>
                </div>

                <div class="col l1"></div>
            </div>

        </div>


        
<!--    SECCIÓN PARA LA OPINIÓN GENERAL POR PARTE DEL ENCARGADO DEL PROGRAMA -->
        <div id="opinion_general">
            <div class="row">

              <div class="col s1 m1 l1"></div>
              <div class="col s10 m10 l10">

                  <div class="container">
                    <div class="card">
                      <div class="card-content card-content-comments">

                      <span class="card-title card-title-comments"><strong>Comentarios y observaciones generales</strong></span>
                        <!-- <a class="btn-floating btn-small right orange"><i class="material-icons">edit</i></a>-->
                        <p class="ComentariosObservacionesGenerales"></p>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-content card-content-comments">

                        <span class="card-title card-title-comments"><strong>Comentarios y observaciones específicos por tema</strong></span>
                        <!--<a class="btn-floating btn-small right orange"><i class="material-icons">edit</i></a>--> </h5>
                        <p class="ComentariosObservacionesPorTema"></p>

                      </div>
                    </div>
                  </div>

              </div>
              <div class="col s1 m1 l1"></div>

            </div>
        </div>

<!--    SECCIÓN PARA EL PLAN DE MEJORA POR PARTE DEL ENCARGADO DEL PROGRAMA -->
        <div id="plan_de_mejora">
            <div class="row">
                <div class="col l1"></div>
                <div class="col l10">

                    <div class="card-content-mejoras">

                    </div>

                    <div class="card card-plan-de-mejora">
                      <div class="card-content">
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
      
                </div>
                <div class="col l1"></div>
            </div>
        </div>

<!--
                              <li class="collection-item avatar">
                                <img src="Resource/images/word.svg" alt="" class="format-svg-avatar">
                                
                                <div class="title-document-container">
                                    <span class="title title-document">Formato de posicionamiento_2019.docx</span>
                                    <span class="document-status document-aprobed"><i class="material-icons left icon-size">assignment_turned_in</i>Aprobado</span>
                                </div>

                                <div class="action-buttons">
                                    <a class="btn-floating btn-small btn-AddRecomendation waves-effect green darken-4 tooltipped" data-position="bottom" data-tooltip="Agregar un ASM"><i class="material-icons left">assignment</i></a>
                                    <a class="btn-floating btn-small btn-modify waves-effect orange tooltipped" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small btn-delete waves-effect red tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                                </div>
                              </li>

                              <li class="collection-item avatar">
                                <img src="Resource/images/pdf.svg" alt="" class="format-svg-avatar">
                                <div class="title-document-container">
                                  <span class="title title-document">Formato de posicionamiento_ 2019.pdf</span>
                                  <span class="document-status document-send"><i class="material-icons left icon-size">near_me</i>Enviado para revisión</span>
                                </div>

                                <div class="action-buttons">
                                    <a class="btn-floating btn-small btn-AddRecomendation green darken-4 tooltipped" data-position="bottom" data-tooltip="Agregar un ASM"><i class="material-icons left">assignment</i></a>
                                    <a class="btn-floating btn-small btn-modify waves-effect orange tooltipped" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small btn-delete waves-effect red tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                                </div>
                              </li>

                              <li class="collection-item avatar">
                                <img src="Resource/images/excel.svg" alt="" class="format-svg-avatar">
                                <div class="title-document-container">
                                  <span class="title title-document">tabla_de_requerimientos.xlsx</span>
                                  <span class="document-status document-observations"><i class="material-icons left icon-size">assignment</i>Documento con recomendaciones</span>
                                </div>

                                <div class="action-buttons">
                                    <a class="btn-floating btn-small btn-AddRecomendation green darken-4 tooltipped" data-position="bottom" data-tooltip="Agregar un ASM"><i class="material-icons left">assignment</i></a>
                                    <a class="btn-floating btn-small btn-modify waves-effect orange tooltipped" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small btn-delete waves-effect red tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                                </div>
                              </li>

                              <li class="collection-item avatar">
                                <img src="Resource/images/powerpoint.svg" alt="" class="format-svg-avatar">
                                <div class="title-document-container">
                                  <span class="title title-document">presentacion_proyecto_final.pptx</span>
                                  <span class="document-status document-aprobed"><i class="material-icons left icon-size">assignment_turned_in</i>Enviado para revisión</span>
                                </div>

                                <div class="action-buttons">
                                    <a class="btn-floating btn-small btn-AddRecomendation green darken-4 tooltipped" data-position="bottom" data-tooltip="Agregar un ASM"><i class="material-icons left">assignment</i></a>
                                    <a class="btn-floating btn-small btn-modify waves-effect orange tooltipped" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small btn-delete waves-effect red tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                                </div>
                              </li>
-->

<!--                          
                          <li class="collection-item collection-item-recomendations">
                            <a href="#modal-recomendation-description" class="modal-trigger">
                              <div class="btn-recomendation truncate">
                                  <i class="id_recomendation">ID: 0000</i>
                                  <i class="recomendation_preview"> - 1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet corrupti hic, excepturi similique consequuntur cumque. </i>
                              </div>

                              <div class="action-buttons-recomendations">
                                  <a class="btn-floating btn-small btn-modify waves-effect orange"><i class="material-icons">edit</i></a>
                                  <a class="btn-floating btn-small btn-delete waves-effect red"><i class="material-icons">delete</i></a>
                              </div>
                            </a>
                          </li>

                          <li class="collection-item collection-item-recomendations">
                            <a href="#modal-recomendation-description" class="modal-trigger">
                              <div class="btn-recomendation truncate">
                                  <i class="id_recomendation">ID: 0000</i>
                                  <i class="recomendation_preview"> - 1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet corrupti hic, excepturi similique consequuntur cumque. </i>
                              </div>

                              <div class="action-buttons-recomendations">
                                  <a class="btn-floating btn-small btn-modify waves-effect orange"><i class="material-icons">edit</i></a>
                                  <a class="btn-floating btn-small btn-delete waves-effect red"><i class="material-icons">delete</i></a>
                              </div>
                            </a>
                          </li>

                          <li class="collection-item collection-item-recomendations">
                            <a href="#modal-recomendation-description" class="modal-trigger">
                              <div class="btn-recomendation truncate">
                                  <i class="id_recomendation">ID: 0000</i>
                                  <i class="recomendation_preview"> - 1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet corrupti hic, excepturi similique consequuntur cumque. </i>
                              </div>

                              <div class="action-buttons-recomendations">
                                  <a class="btn-floating btn-small btn-modify waves-effect orange"><i class="material-icons">edit</i></a>
                                  <a class="btn-floating btn-small btn-delete waves-effect red"><i class="material-icons">delete</i></a>
                              </div>
                            </a>
                          </li>
-->

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

        <!-- Moment JS library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
        
        <!-- JQuery library -->
        <script src="Resource/jQuery/jquery-3.2.1.min.js"></script>

        <!-- Materialize CSS Framework -->
        <script src="Resource/Materialize/materialize.min.js"></script>

        <!-- Scripts of JS -->
        <script src="Resource/js/home_epp.js"></script>
</body>
</html>

