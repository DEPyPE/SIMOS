
var UserData    = JSON.parse( localStorage.getItem("UserData") );
var ProjectInfo = JSON.parse( localStorage.getItem("ProjectInfo") );

//  FICHA TÉCNICA DEL PROYECTO
function Get_FTProject(){
    var TypDat = "TechnicalInformationProject";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPPController.php", {ID: ID_Project, TypeData: TypDat}, function( DataTechProject ){
        FichaTecnicaProyecto = JSON.parse( DataTechProject );
        localStorage.setItem("FichaTecnicaProyecto", JSON.stringify(FichaTecnicaProyecto) );

        ShowUpdate_FTProject(FichaTecnicaProyecto);
    });
}

function ShowUpdate_FTProject(FichaTecnicaProyecto){
    //console.log( "Ficha técnica del proyecto => ",  FichaTecnicaProyecto );

    if( FichaTecnicaProyecto.Status == "Correct" ){
        $('.table-ficha-tecnica-proyecto').css('display', 'block');

        $('.main-title-project').text( 'SIMOS / '+FichaTecnicaProyecto.ClaveProyecto);
        $('.NombreProyecto').text( FichaTecnicaProyecto.NombreProyecto );
        $('.ClaveProyecto').text( FichaTecnicaProyecto.ClaveProyecto );
        $('.DependenciaProyecto').text( FichaTecnicaProyecto.DependenciaDelProyecto );
        $('.SiglasDependencia').text( FichaTecnicaProyecto.SiglasDependenciaProyecto );
        $('.UnidadResponsable').text( FichaTecnicaProyecto.UnidadResponsable );
        $('.SiglasUnidadResponsable').text( FichaTecnicaProyecto.SiglasUnidadResponsable );
        $('.NombreResponsable').text( FichaTecnicaProyecto.NombreResponsable );

        $('.btn-add-project-information').css('display', 'none');
    }else if( FichaTecnicaProyecto.Status == "Sin resultados" ){
        $('.table-ficha-tecnica-proyecto').css('display', 'none');
        $('.card-content-ft-proyecto').append('<h6>Sin información registrada</h6>');
        $('.main-title-project').text( 'SIMOS / Sin programa o proyecto');
        $('.btn-add-project-information').css('display', 'block');
    }else{
        M.toast({html: 'Error al mostrar la ficha técnica \n del proyecto. Err. 0001', classes: 'red lighten-1 rounded'});
    }
}

//  FICHA TECNICA DE LA INSTANCIA EVALUADORA
function Get_FTEvaluation(){
    var TypDat = "TechnicalInformationEvaluation";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPPController.php", {ID: ID_Project, TypeData: TypDat}, function( DataTechEvaluator ){
        FichaTecnicaEvaluacion = JSON.parse( DataTechEvaluator );
        localStorage.setItem("FichaTecnicaEvaluacion", JSON.stringify(FichaTecnicaEvaluacion) );

        ShowUpdate_FTEvaluation(FichaTecnicaEvaluacion);
    });
}

function ShowUpdate_FTEvaluation(){
    //console.log( "Ficha técnica de la evaluacion => ", FichaTecnicaEvaluacion );

    if( FichaTecnicaEvaluacion.Status == "Correct" ){
        $('.table-evaluation').css('display', 'block');

        $('.InstanciaEvaluadora').text( FichaTecnicaEvaluacion.InstanciaEvaluadora );
        $('.NombreDeEvaluacion').text( FichaTecnicaEvaluacion.NombreDeEvaluacion );
        $('.TipoEvaluacion').text( FichaTecnicaEvaluacion.TipoEvaluacion );
        $('.AñoDeEvaluacion').text( FichaTecnicaEvaluacion.AñoDeEvaluacion );
        $('.NombreDelInforme').text( FichaTecnicaEvaluacion.NombreDelInforme );
        $('.CostoEvaluacion').text( '$'+FichaTecnicaEvaluacion.CostoEvaluacion );
    }else if( FichaTecnicaEvaluacion.Status == "Sin resultados" ){
        $('.table-evaluation').css('display', 'none');
        $('.card-content-evaluation').append('<h6>Sin información registrada</h6>');
    }else{
        M.toast({html: 'Error al mostrar la ficha técnica \n de la evaluación. Err. 001', classes: 'red lighten-1 rounded'});
    }
}

//   OPINION GENERAL
function Get_OpinionGeneral(){
    var TypDat = "OpinionGeneral";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPPController.php", {ID: ID_Project, TypeData: TypDat}, function( DataOpinionGeneral ){
        OpinionGeneral = JSON.parse( DataOpinionGeneral );
        localStorage.setItem("OpinionGeneral", JSON.stringify(OpinionGeneral) );

        //console.log( "Opinión general => ", DataOG );
        ShowUpdate_OpinionGeneral(OpinionGeneral);
    });
}

function ShowUpdate_OpinionGeneral(OpinionGeneral){
    if( OpinionGeneral.Status == "Correct" ){
        $('.ComentariosObservacionesGenerales').html( OpinionGeneral.ComentariosObservacionesGenerales.replace(/\n/g, '<br><br>') );
        $('.ComentariosObservacionesPorTema').html( OpinionGeneral.ComentariosObservacionesPorTema.replace(/\n/g, '<br><br>') );
    }else if( OpinionGeneral.Status == "Sin resultados" ){
        $('.ComentariosObservacionesGenerales').append('<h6>Sin información registrada</h6>');
        $('.ComentariosObservacionesPorTema  ').append('<h6>Sin información registrada</h6>');
    }else{
        M.toast({html: 'Error al mostrar la opinión general. Err. 0001', classes: 'red rounded'});
    }
}

//  RECOMENDACIONES - PLAN DE MEJORA
function Get_Recomendaciones(){    
    var TypDat = "Recomendaciones";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPPController.php", {ID: ID_Project, TypeData: TypDat}, function( DataRecomendaciones ){
        Recomendaciones = JSON.parse( DataRecomendaciones );
        localStorage.setItem("Recomendaciones", JSON.stringify(Recomendaciones) );

        //console.log( "Recomendaciones => ", DataRec );
        ShowUpdate_Recomendaciones(Recomendaciones);
    });
}

function ShowUpdate_Recomendaciones(Recomendaciones){
    var RecomendacionesHTML = "";
    var RecomendacionesHTML2 = "";

    if( Recomendaciones.Status == "Correct" ){

        for(var i=0; i<Recomendaciones.Length; i++){
            RecomendacionesHTML = RecomendacionesHTML +"<tr> <td> "+ Recomendaciones[i].IdentificadorRecomendacion +" </td>" + 
                                                            "<td> "+ Recomendaciones[i].AspectoSusceptibleDeMejora +" </td>" +
                                                            "<td> "+ Recomendaciones[i].TipoActoresInvolucradosEnSolucion +" </td>" +
                                                            "<td> "+ Recomendaciones[i].NivelDePrioridad +" </td>" +
                                                            "<td> "+ Recomendaciones[i].AccionDeMejora +" </td>" + 
                                                            "<td> "+ Recomendaciones[i].AreaResponsable +" </td>" + 
                                                            "<td> "+ Recomendaciones[i].FechaCompromisoDeCumplimiento +" </td>" + 
                                                            "<td> "+ Recomendaciones[i].ResultadosEsperados +" </td>" + 
                                                            "<td> "+ Recomendaciones[i].EvidenciasSolicitadas +" </td></tr>";

            RecomendacionesHTML2 = RecomendacionesHTML2 + '<div class="card"> <div class="card-content">'+
                                                            '<div class="row"> '+
                                                            '<div class="col s1 m1 l1">'+
                                                                '<strong>No. </strong>'+
                                                                '<i class="num_recomendacion">'+Recomendaciones[i].IdentificadorRecomendacion+'</i>'+
                                                            '</div>'+
                                
                                                            '<div class="col s7 m7 l7">'+
                                                            '<strong>Aspecto Susceptible de Mejora/Recomendación</strong>'+
                                                            '<p class="AspectoSusceptibleDeMejora">'+Recomendaciones[i].AspectoSusceptibleDeMejora+'</p>'+
                                                            '</div>'+
                                
                                                            '<div class="col s2 m2 l2">'+
                                                                '<strong>Actores involucrados en la solución:</strong>'+
                                                                '<p class="actores_involucrados">'+Recomendaciones[i].TipoActoresInvolucradosEnSolucion+'</p>'+
                                                            '</div>'+
                                
                                                            '<div class="col s2 m2 l2">'+
                                                            '<strong>Nivel de prioridad:</strong>'+
                                                            '<p class="nivel_prioridad">'+Recomendaciones[i].NivelDePrioridad+'</p>'+
                                                            '</div>'+
                                                        '</div>'+
                                                        
                                                        '<div class="row">'+
                                                            '<div class="col s1 m1 l1"></div>'+
                                                            
                                                            '<div class="col s3 m3 l3">'+
                                                            '<strong>Acción de mejora:</strong>'+
                                                            '<p class="accion_mejora">'+Recomendaciones[i].AccionDeMejora+'</p>'+
                                                            '</div>'+
                                
                                                            '<div class="col s4 m4 l4">'+
                                                            '<strong>Área responsable:</strong>'+
                                                            '<p class="area_responsable">'+Recomendaciones[i].AreaResponsable+'</p>'+
                                                            '</div>'+
                                
                                                            '<div class="col s2 m2 l2">'+
                                                                '<strong>Fecha de cumplimiento:</strong>'+
                                                                '<p class="fecha_compromiso">'+Recomendaciones[i].FechaCompromisoDeCumplimiento+'</p>'+
                                                            '</div>'+
                                
                                                            '<div class="col s2 m2 l2">'+
                                                                '<strong>Resultados esperados:</strong>'+
                                                                '<p class="resultados">'+Recomendaciones[i].ResultadosEsperados+'</p>'+
                                                            '</div></div></div></div>';
        }

        $('#tabla-plan-de-mejora>tbody').append(RecomendacionesHTML);
        $('.card-content-mejoras').append( RecomendacionesHTML2 );
    }else if( Recomendaciones.Status == "Sin resultados" ){
        $('.card-content-mejoras').append('<div class="card"> <div class="card-content"> <h6>Sin información registrada</h6> </div></div> ');
        $('.card-plan-de-mejora').css('display', 'none');
    }else{
        M.toast({html: 'Error al mostrar el plan de mejora. Err. 0001', classes: 'red rounded'});
    }
}

//  DOCUMENTOS DEL PROYECTO
function HTML_DocumentFormat(frmt, filename, filestatus, idoc){
    var typefile = '';

    if(frmt == "docx")
        typefile = 'word';
    else if(frmt == "xlsx")
        typefile = 'excel';
    else if(frmt == "pptx")
        typefile = 'powerpoint';
    else
        typefile = 'pdf';

    var styledocs = '';
    if( filestatus == 'Aprobado' ){
        styledocs = 'aprobed';
        iconstatus = 'assignment_turned_in';
    }else if( filestatus == 'En revisión' ){
        styledocs = 'send';
        iconstatus = 'find_in_page';
    }else if( filestatus == 'Con recomendaciones' ){
        styledocs = 'observations';
        iconstatus = 'assignment';
    }
    
    var DocumentFormat = '<li class="collection-item avatar"><img src="Resource/images/'+typefile+'.svg" alt="" class="format-svg-avatar">' +
                         '<div class="title-document-container"><span class="title title-document truncate"><span class="idoc" style="display: none;">'+idoc+'</span>'+filename+'.'+frmt+'</span><span class="document-status document-'+styledocs+'"><i class="material-icons left icon-status-document">'+iconstatus+'</i>'+filestatus+'</span></div>' +
                         '<div class="action-buttons"> <a class="btn-floating btn-small btn-AddRecomendation waves-effect green darken-4 tooltipped" data-position="bottom" data-tooltip="Agregar un ASM"><i class="material-icons left">assignment</i></a><a class="btn-floating btn-small btn-modify waves-effect orange tooltipped" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a><a class="btn-floating btn-small btn-delete waves-effect red tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></div></li>';

    return DocumentFormat;
}

function Get_ProjectDocuments(){
    var TypDat = "DocumentosDelProyecto";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPPController.php", {ID: ID_Project, TypeData: TypDat}, function( DataDocs ){
        DocumentosProyecto = JSON.parse( DataDocs );
        localStorage.setItem("DataDocuments", JSON.stringify(DocumentosProyecto) );

        //console.log( "Documentos => ", DataDocuments );
        ShowUpdate_DocumentosProyecto(DocumentosProyecto);
    });
}

function ShowUpdate_DocumentosProyecto(DocumentosProyecto){
        //  DOCUMENTOS Y ASM POR DOCUMENTO
        if( DocumentosProyecto.Status === "Correct" ){
            $('.card-title-documents').text('Documentos');
    
            var doc_html = "";
    
            for( var doc_i = 0; doc_i < DocumentosProyecto.Length; doc_i++ ){
                Documento_i = DocumentosProyecto[doc_i];
                doc_html = doc_html + HTML_DocumentFormat( Documento_i.FormatoDocumento, Documento_i.NombreDocumento, Documento_i.EstadoRevision, Documento_i.ID_DocumentoProyecto );
            }
        
            $('.collection-documents').prepend( doc_html );
            $('.collection-documents').children()[0].click();
        }else if( DocumentosProyecto.Status === "Sin resultados" ){
            $('.card-title-documents').text('Sin documentos');
            console.log(DocumentosProyecto.Status);
        }else{
            M.toast({html: 'Error al mostrar los documentos del proyecto. Err. 0001', classes: 'red rounded'});
        }
}

//  RECOMENDACIONES DE LOS DOCUMENTOS DEL PROYECTO
function HTML_RecomendationFormat(RecDoc){
    var FormatRec = "";

    if( RecDoc.Length > 0 ){
        for(var reci = 0; reci<RecDoc.Length; reci++){
            FormatRec = FormatRec + '<li class="collection-item collection-item-recomendations"> <a href="#modal-recomendation-description" class="modal-trigger"> <div class="btn-recomendation truncate"><i class="id_recomendation">000'+RecDoc[reci].ID_RecomendacionDocumento+'</i><i class="recomendation_preview"> - '+RecDoc[reci].AspectoSusceptibleDeMejora+'</i></div><div class="action-buttons-recomendations"> <a class="btn-floating btn-small btn-modify waves-effect orange"><i class="material-icons">edit</i></a> <a class="btn-floating btn-small btn-delete waves-effect red"><i class="material-icons">delete</i></a> </div> </a> </li>';
        }
    }else{
        FormatRec = '<h6>Sin recomendaciones registradas</h6>';
    }    

    return FormatRec;
}

function Get_DocumentsRecomendations(ID_Documento){
    var TypDat = "RecomendacionesPorDocumento";

    $.post("Controller/HomeEPPController.php", {ID: ID_Documento, TypeData: TypDat}, function( DataDocsRec ){
        DataRecomendDocuments = JSON.parse( DataDocsRec );
        localStorage.setItem("DataDocumentsRecomendations", JSON.stringify(DataRecomendDocuments) );

        FormatRec = HTML_RecomendationFormat(DataRecomendDocuments);
        
        $('.collection-document-recomendations').empty();
        $('.collection-document-recomendations').html( FormatRec );

        //console.log( "Recomendaciones => ", DataRecomendDocuments );
    });
}

function ShowInformationProject(){

    Get_FTProject();
    Get_FTEvaluation();
    Get_OpinionGeneral();
    Get_Recomendaciones();
    Get_ProjectDocuments();

    var FichaTecnicaProyecto    = JSON.parse( localStorage.getItem("FichaTecnicaProyecto"   ));
    var FichaTecnicaEvaluacion  = JSON.parse( localStorage.getItem("FichaTecnicaEvaluacion" ));
    var OpinionGeneral          = JSON.parse( localStorage.getItem("OpinionGeneral"         ));
    var Recomendaciones         = JSON.parse( localStorage.getItem("Recomendaciones"        ));
    var DocumentosProyecto      = JSON.parse( localStorage.getItem("DataDocuments"          ));

}

$(function(){
    $('.collapsible').collapsible();
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    $('.modal').modal();
    $(".dropdown-trigger").dropdown();
    $('.tooltipped').tooltip();

    Get_FTProject();
    Get_FTEvaluation();
    Get_OpinionGeneral();
    Get_Recomendaciones();
    Get_ProjectDocuments();
    
    console.log( 'Ready!' );
});

$('.btn-upload-documents').on('click', function(){
    var doc = HTML_DocumentFormat('pdf', 'cuadro_diagnóstico', 'Aprobado');
    $('.collection-documents').prepend( doc );
});

$('.collection-step-menu .collection-item').on('click', function(){
    $(this).siblings().removeClass('collection-active');
    $(this).addClass('collection-active');

    var type_document = $(this).text().split("  ")[1];

    if( type_document == "Posicionamiento" ){
        $('.collapsible-posicionamiento-asm').slideDown(200);
        $('.collapsible-plan-de-trabajo-asm').slideUp(50);
    }else if( type_document == "Plan de trabajo" ){
        $('.collapsible-posicionamiento-asm').slideUp(50);
        $('.collapsible-plan-de-trabajo-asm').slideDown(200);
    }
});

$('.collapsible .collapsible-header').on('click', function(){
    $(this).addClass('collapsible-active');
    $(this).parent().siblings().children().removeClass('collapsible-active');
});

$('.btn-recomendation-complete').on('click', function(){
    M.toast({html: 'Recomendación atendida', classes: 'rounded'});
    $(this).addClass('disabled');
});

$('.btn-delete-document').on('click', function(){
    
});

$('.btn-confirm-delete').on('click', function(){
    M.toast({html: 'Documento eliminado', classes: 'rounded'});    
});

//  Botones para los documentos
$('.collection-documents').on('mouseenter', '.collection-item', function(){
    $(this).children('.action-buttons').css('display', 'block');
});

$('.collection-documents').on('mouseleave', '.collection-item', function(){
    $(this).children('.action-buttons').css('display', 'none');
});

$('.collection-documents').on('click', '.collection-item', function(){
    var idoc = $(this).children('.title-document-container').children().find('.idoc').text();
    Get_DocumentsRecomendations(idoc);
    
    $(this).addClass('document-selected');
    $(this).siblings().removeClass('document-selected');

    $(this).siblings().find('.title-document').css('font-weight', '400');
    $(this).siblings().find('.icon-status-document').css('color', 'rgba(0, 0, 0, 0.2)');
    $(this).siblings().find('.document-status').css('font-weight', '400');
    
    $(this).find('.title-document').css('font-weight', '600');
    $(this).find('.icon-status-document').css('color', 'rgba(0, 0, 0, 0.4)');
    $(this).find('.document-status').css('font-weight', '500');

    //.document-aprobed, .document-send, .document-observations{
    //.title-document font-weight: 400;
});

//  Botones para las recomendaciones
$('.collection-document-recomendations').on('mouseenter', '.collection-item-recomendations', function(){
    $(this).children('.action-buttons-recomendations').css('display', 'block');
});

$('.collection-document-recomendations').on('mouseleave', '.collection-item-recomendations', function(){
    $(this).children('.action-buttons-recomendations').css('display', 'none');
});
