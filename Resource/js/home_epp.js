
var UserData    = JSON.parse( localStorage.getItem("UserData") );
var ProjectInfo = JSON.parse( localStorage.getItem("ProjectInfo") );

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

    $.post("Controller/HomeEPP_ReadController.php", {ID: ID_Project, TypeData: TypDat}, function( DataDocs ){
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

    $.post("Controller/HomeEPP_ReadController.php", {ID: ID_Documento, TypeData: TypDat}, function( DataDocsRec ){
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
    $('.datepicker').datepicker();
    $('select').formSelect();

    //$('#ModalAddModifyPlanMejora').modal('open');

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

//  Eventos para mostrar y ocultar las opciones para los documentos
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

/* ---------------------------------       READ FROM FORMS FUNCTIONS         --------------------------------- */
function ReadForm_ProjectData(){
    var ProjectData = { 
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        NombreProyecto: $('#txtNombreProyecto').val(),
        ClaveProyecto: $('#txtClaveProyecto').val(),
        DependenciaDelProyecto: $('#txtDepen').val(),
        SiglasDependenciaProyecto: $('#txtSiglasDependencia').val(),
        UnidadResponsable: $('#txtUR').val(),
        SiglasUnidadResponsable: $('#txtSiglasUR').val(),
        NombreResponsable: $('#txtResponsable').val()
    }

    return ProjectData;
}

function ReadForm_EvaluationData(){
    var EvaluationData = {
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        InstanciaEvaluadora: $("#txtInstanciaEvaluadora").val(),
        NombreDeEvaluacion: $("#txtNombreEvaluacion").val(),
        TipoEvaluacion: $("#txtTipoEvaluacion").val(),
        AñoDeEvaluacion: $("#txtYearEvaluation").val(),
        NombreDelInforme: $("#txtNombreInforme").val(),
        CostoEvaluacion: $("#txtCostoEvaluacion").val()
    }

    return EvaluationData;
}

function ReadForm_OpinionGeneral(){
    var OpinionGeneral = {
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        ComentariosObservacionesGenerales: $('#txtObservacionesGenerales').val(),
        ComentariosObservacionesPorTema: $('#txtPorTema').val()
    }

    return OpinionGeneral;
}

/* ---------------------------------            SHOW DATA FUNCTIONS          --------------------------------- */

function UpdateView_FTProject(FichaTecnicaProyecto){
    //console.log( "Ficha técnica del proyecto => ",  FichaTecnicaProyecto );

    if( FichaTecnicaProyecto.Status == "Correct" ){
        $('.btn-add-project-information').hide();
        $('.btn-edit-project-information').show();
        $('.btn-save-project-information').hide();
        $('.btn-update-project-information').show();

        $('.table-ficha-tecnica-proyecto').show();
        $('.NoFTProjectInformation').hide();

        $('.main-title-project').text( 'SIMOS / '+FichaTecnicaProyecto.ClaveProyecto);
        $('.NombreProyecto').text( FichaTecnicaProyecto.NombreProyecto );
        $('.ClaveProyecto').text( FichaTecnicaProyecto.ClaveProyecto );
        $('.DependenciaProyecto').text( FichaTecnicaProyecto.DependenciaDelProyecto );
        $('.SiglasDependencia').text( FichaTecnicaProyecto.SiglasDependenciaProyecto );
        $('.UnidadResponsable').text( FichaTecnicaProyecto.UnidadResponsable );
        $('.SiglasUnidadResponsable').text( FichaTecnicaProyecto.SiglasUnidadResponsable );
        $('.NombreResponsable').text( FichaTecnicaProyecto.NombreResponsable );
    }else if( FichaTecnicaProyecto.Status == "Sin resultados" ){
        $('.table-ficha-tecnica-proyecto').hide();
        $('.NoFTProjectInformation').show();
        $('.main-title-project').text( 'SIMOS / Sin programa o proyecto');

        $('.btn-add-project-information').show();
        $('.btn-edit-project-information').hide();

        $('.btn-save-project-information').show();
        $('.btn-update-project-information').hide();
    }else{
        M.toast({html: 'Error al mostrar la ficha técnica \n del proyecto. Err. 0001', classes: 'red lighten-1 rounded'});
    }
}

function UpdateView_FTEvaluation(FichaTecnicaEvaluacion){
    //console.log( "Ficha técnica de la evaluacion => ", FichaTecnicaEvaluacion );

    if( FichaTecnicaEvaluacion.Status == "Correct" ){
        $('.table-evaluation').show();
        $('.NoFTEvaluationInformation').hide();
        
        $('.btn-add-evaluation-information').hide();
        $('.btn-edit-evaluation-information').show();
        $('.btn-insert-evaluation-information').hide();
        $('.btn-update-evaluation-information').show();
        
        $('.InstanciaEvaluadora').text( FichaTecnicaEvaluacion.InstanciaEvaluadora );
        $('.NombreDeEvaluacion').text( FichaTecnicaEvaluacion.NombreDeEvaluacion );
        $('.TipoEvaluacion').text( FichaTecnicaEvaluacion.TipoEvaluacion );
        $('.AñoDeEvaluacion').text( FichaTecnicaEvaluacion.AñoDeEvaluacion );
        $('.NombreDelInforme').text( FichaTecnicaEvaluacion.NombreDelInforme );
        $('.CostoEvaluacion').text( '$'+FichaTecnicaEvaluacion.CostoEvaluacion );
    }else if( FichaTecnicaEvaluacion.Status == "Sin resultados" ){
        $('.table-evaluation').hide();
        $('.NoFTEvaluationInformation').show();

        $('.btn-add-evaluation-information').show();
        $('.btn-edit-evaluation-information').hide();
        $('.btn-insert-evaluation-information').show();
        $('.btn-update-evaluation-information').hide();
    }else{
        M.toast({html: 'Error al mostrar la ficha técnica \n de la evaluación. Err. 001', classes: 'red lighten-1 rounded'});
    }
}

function UpdateView_OpinionGeneral(OpinionGeneral){
    if( OpinionGeneral.Status == "Correct" ){
        $('#ComentariosObservacionesGenerales').show();
        $('#ComentariosObservacionesPorTema').show();

        $('#ComentariosObservacionesGenerales').val( OpinionGeneral.ComentariosObservacionesGenerales );
        M.textareaAutoResize($('#ComentariosObservacionesGenerales'));

        $('#ComentariosObservacionesPorTema').val( OpinionGeneral.ComentariosObservacionesPorTema );
        M.textareaAutoResize($('#ComentariosObservacionesPorTema'));
        
        $('.OG_SinInfo').css('display', 'none');
        
        $('.btn-add-opinion-general').hide();
        $('.btn-edit-general-comments').show();
        $('.btn-edit-specific-comments').show();
        $('.btn-insert-opinion-general').hide()
    }else if( OpinionGeneral.Status == "Sin resultados" ){
        $('.OG_SinInfo').css('display', 'block');

        $('#ComentariosObservacionesGenerales').hide();
        $('#ComentariosObservacionesPorTema').hide();

        $('.btn-add-opinion-general').show();
        $('.btn-edit-general-comments').hide();
        $('.btn-edit-specific-comments').show();
        $('.btn-insert-opinion-general').show();
    }else{
        M.toast({html: 'Error al mostrar la opinión general. Err. 0001', classes: 'red rounded'});
    }
}

function UpdateView_Recomendaciones(RecomendacionForm){

    var table_recomendaciones = "";
    var asm_complete_flag;
    console.log( RecomendacionForm );

    if( RecomendacionForm.Status == "Correct" ){
        for(var i=0; i<RecomendacionForm.Length; i++){

            if( RecomendacionForm[i].BanderaRecomendacionCompletada == "Corregido" )
                asm_complete_flag = "complete";
            else if( RecomendacionForm[i].BanderaRecomendacionCompletada == "En proceso" )
                asm_complete_flag = "in-process";
            else
                asm_complete_flag = "incomplete";

            table_recomendaciones = table_recomendaciones +
                "<tr>"+ 
                    "<td class='center-align'> <div class='asm-status-style-"+asm_complete_flag+"'></div></td>"+
                    "<td class='NumASM center-align'>"+ RecomendacionForm[i].IdentificadorRecomendacion +"</td>"+
                    "<td>"+ RecomendacionForm[i].AspectoSusceptibleDeMejora +"</td>"+
                    "<td>"+ RecomendacionForm[i].TipoActoresInvolucradosEnSolucion +"</td>"+
                    "<td class='center-align'>"+ RecomendacionForm[i].NivelDePrioridad +"</td>"+
                    "<td>"+ RecomendacionForm[i].AccionDeMejora +"</td>"+
                    "<td>"+ RecomendacionForm[i].AreaResponsable +"</td>"+
                    "<td class='center-align'>"+ RecomendacionForm[i].FechaCompromisoDeCumplimiento +"</td>"+
                    "<td>"+ RecomendacionForm[i].ResultadosEsperados +"</td>"+
                    "<td>"+ RecomendacionForm[i].EvidenciasSolicitadas +"<div class='delete-recomendation-container'><a class='btn-floating btn-small btn-delete-recomendacion waves-effect red darken-2 modal-trigger right' href='#ModalDeleteRecomendation'><i class='material-icons'>delete</i></a></div></td>"+
                "</tr>";
        }

        $('.no-data-recomendaciones').css('display', 'none');
        $('.with-data-recomendaciones').css('display', 'block');

        $('.table-body-content-mejoras').empty();
        $('.table-body-content-mejoras').append( table_recomendaciones );
    }else if( RecomendacionForm.Status == "Sin resultados" ){
        $('.no-data-recomendaciones').css('display', 'block');
        $('.with-data-recomendaciones').css('display', 'none');
        $('.card-plan-de-mejora').css('display', 'none');
    }else{
        M.toast({html: 'Error al mostrar el plan de mejora. Err. 0001', classes: 'red rounded'});
    }

}

//  FICHA TÉCNICA DEL PROYECTO
function Get_FTProject(){
    var TypDat = "TechnicalInformationProject";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPP_ReadController.php", {ID: ID_Project, TypeData: TypDat}, function( DataTechProject ){
        FichaTecnicaProyecto = JSON.parse( DataTechProject );
        localStorage.setItem("FichaTecnicaProyecto", JSON.stringify(FichaTecnicaProyecto) );

        UpdateView_FTProject(FichaTecnicaProyecto);
    });
}

//  FICHA TECNICA DE LA INSTANCIA EVALUADORA
function Get_FTEvaluation(){
    var TypDat = "TechnicalInformationEvaluation";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPP_ReadController.php", {ID: ID_Project, TypeData: TypDat}, function( DataTechEvaluator ){
        FichaTecnicaEvaluacion = JSON.parse( DataTechEvaluator );
        localStorage.setItem("FichaTecnicaEvaluacion", JSON.stringify(FichaTecnicaEvaluacion) );

        UpdateView_FTEvaluation(FichaTecnicaEvaluacion);
    });
}

//   OPINION GENERAL
function Get_OpinionGeneral(){
    var TypDat = "OpinionGeneral";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPP_ReadController.php", {ID: ID_Project, TypeData: TypDat}, function( DataOpinionGeneral ){
        OpinionGeneral = JSON.parse( DataOpinionGeneral );
//        OpinionGeneral.ComentariosObservacionesGenerales = OpinionGeneral.ComentariosObservacionesGenerales.replace(/\n/g, '<br>');
//        OpinionGeneral.ComentariosObservacionesPorTema = OpinionGeneral.ComentariosObservacionesPorTema.replace(/\n/g, '<br>');

        localStorage.setItem("OpinionGeneral", JSON.stringify(OpinionGeneral) );

        //console.log( "Opinión general => ", DataOG );
        UpdateView_OpinionGeneral(OpinionGeneral);
    });
}

//  RECOMENDACIONES - PLAN DE MEJORA
function Get_Recomendaciones(){
    var TypDat = "Recomendaciones";
    var ID_Project = ProjectInfo.ID_ProgramaProyecto;

    $.post("Controller/HomeEPP_ReadController.php", {ID: ID_Project, TypeData: TypDat}, function( DataRecomendaciones ){
        Recomendaciones = JSON.parse( DataRecomendaciones );
        localStorage.setItem("Recomendaciones", JSON.stringify(Recomendaciones) );

        console.log( "Recomendaciones => ", Recomendaciones );
        UpdateView_Recomendaciones(Recomendaciones);
    });
}

/* ---------------------------------            INSERT DATA FUNCTIONS       --------------------------------- */

function Insert_ProjectData(ProjectData){    
    var TypeQry = "InsertProjectInfo";

    $.post('Controller/HomeEPP_CreateController.php', {ProjectInfo: ProjectData, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('FichaTecnicaProyecto', JSON.stringify(ProjectData));
            $('#ModalAddModifyTechnicalProjectInfo').modal('close');
            ProjectData.Status = "Correct";

            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_FTProject(ProjectData);
        }
    });
}

function Insert_EvaluationData(EvaluationData){
    var TypeQry = "InsertEvaluationInfo";

    $.post('Controller/HomeEPP_CreateController.php', {EvalData: EvaluationData, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('FichaTecnicaEvaluacion', JSON.stringify(EvaluationData) );
            $('#ModalAddModifyTechnicalEvaluationInfo').modal('close');
            EvaluationData.Status = "Correct";

            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_FTEvaluation(EvaluationData);
        }else{
            M.toast({html: 'Error al guardar los datos', classes: 'red rounded'});
        }
    });
}

function Insert_OpinionGeneral(OpinionForm){
    var TypeQry = "InsertOpinionGeneral";

    $.post('Controller/HomeEPP_CreateController.php', {OpinionData: OpinionForm, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('OpinionGeneral', OpinionForm);
            $('#ModalAddOpinionGeneral').modal('close');
            OpinionForm.Status = "Correct";

            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_OpinionGeneral(OpinionForm);
        }else{
            M.toast({html: 'Error al guardar los datos', classes: 'red rounded'});
        }
    });
}

function Insert_Recomendacion(RecomendacionForm){
    var TypeQry = "InsertRecomendacion";

    $.post('Controller/HomeEPP_CreateController.php', {Recomendacion: RecomendacionForm, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            // AGREGAR LA RECOMENDACIÓN AL VECTOR DE OBJETOS CON LAS RECOMENDACIONES
            //localStorage.setItem('Recomendaciones', RecomendacionForm);
            var RecomendacionVector = [RecomendacionForm];

            var RecomendacionesObject = JSON.parse( localStorage.getItem("Recomendaciones") );

            console.log( "\n\n Old object => ", RecomendacionesObject );
            RecomendacionesObject[ RecomendacionesObject.Length ] = RecomendacionForm;
            RecomendacionesObject.Length = RecomendacionesObject.Length + 1;
            localStorage.setItem('Recomendaciones', JSON.stringify(RecomendacionesObject) ) ;
            console.log( "\n\n New object => ", RecomendacionesObject );

            $('#ModalAddModifyPlanMejora').modal('close');
            RecomendacionVector.Status = "Correct";
            RecomendacionVector.Length = 1;

            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            
            UpdateView_Recomendaciones( RecomendacionVector );
        }else{
            M.toast({html: 'Error al guardar los datos', classes: 'red rounded'});
        }
    });
}

/* ---------------------------------            UPDATE DATA FUNCTIONS       --------------------------------- */

function Update_ProjectData( ProjectData ){
    var TypeQry = "UpdateProjectInfo";

    $.post('Controller/HomeEPP_UpdateController.php', {Data: ProjectData, TypeData: TypeQry}, function(DataRcv){
        
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('FichaTecnicaProyecto', JSON.stringify(ProjectData));
            $('#ModalAddModifyTechnicalProjectInfo').modal('close');
            ProjectData.Status = "Correct";

            M.toast({html: 'Datos actualizados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_FTProject(ProjectData);
        }else if( Data.Status == "Error" ){
            M.toast({html: 'Error en el servidor.', classes: 'red darken-2 rounded'});
        }else{
            M.toast({html: 'Error. Agregue los datos correctamente <br> en su respectivo campo.', classes: 'green darken-2 rounded'});
        }

    });
}

function Update_EvaluationData( EvaluationData ){
    var TypeQry = "UpdateEvaluationInfo";

    $.post('Controller/HomeEPP_UpdateController.php', {Data: EvaluationData, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('FichaTecnicaEvaluacion', JSON.stringify(EvaluationData));
            $('#ModalAddModifyTechnicalEvaluationInfo').modal('close');
            EvaluationData.Status = "Correct";

            M.toast({html: 'Datos actualizados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_FTEvaluation(EvaluationData);
        }else if( Data.Status == "Error" ){
            M.toast({html: 'Error en el servidor.', classes: 'red darken-2 rounded'});
        }else{
            M.toast({html: 'Error. Agregue los datos correctamente <br> en su respectivo campo.', classes: 'green darken-2 rounded'});
        }

    });    
}

function Update_GeneralComments( GeneralComments ){
    var TypeQry = "UpdateGeneralComments";
    
    $.post('Controller/HomeEPP_UpdateController.php', {Data: GeneralComments, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('OpinionGeneral', JSON.stringify(GeneralComments));
            $('#ModalModifyGeneralSpecificComments').modal('close');
            GeneralComments.Status = "Correct";

            M.toast({html: 'Datos actualizados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_OpinionGeneral(GeneralComments);
        }else if( Data.Status == "Error" ){
            M.toast({html: 'Error en el servidor.', classes: 'red darken-2 rounded'});
        }else{
            M.toast({html: 'Error. Agregue los datos correctamente <br> en su respectivo campo.', classes: 'green darken-2 rounded'});
        }

    });    
}

function Update_SpecificComments( SpecificComments ){
    var TypeQry = "UpdateSpecificComments";
    
    $.post('Controller/HomeEPP_UpdateController.php', {Data: SpecificComments, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            localStorage.setItem('OpinionGeneral', JSON.stringify(SpecificComments));
            $('#ModalModifyGeneralSpecificComments').modal('close');
            SpecificComments.Status = "Correct";

            M.toast({html: 'Datos actualizados correctamente', classes: 'green darken-2 rounded'});
            UpdateView_OpinionGeneral(SpecificComments);
        }else if( Data.Status == "Error" ){
            M.toast({html: 'Error en el servidor.', classes: 'red darken-2 rounded'});
        }else{
            M.toast({html: 'Error. Agregue los datos correctamente <br> en su respectivo campo.', classes: 'green darken-2 rounded'});
        }

    });
}

function Update_Recomendation( RecomendationForm ){
    var TypeQry = "UpdateRecomendaciones";
    
    $.post('Controller/HomeEPP_UpdateController.php', {Data: RecomendationForm, TypeData: TypeQry}, function(DataRcv){
        var Data = JSON.parse( DataRcv );

        if( Data.Status == "Correct" ){
            var DataRecomendaciones = JSON.parse( localStorage.getItem( 'Recomendaciones') );

            for(var i=0; i<DataRecomendaciones.Length; i++)
                if( DataRecomendaciones[i].IdentificadorRecomendacion == RecomendationForm.IdentificadorRecomendacion  )
                    DataRecomendaciones[i] = RecomendationForm;

            localStorage.setItem('Recomendaciones', JSON.stringify(DataRecomendaciones));            
            DataRecomendaciones.Status = "Correct";           
            UpdateView_Recomendaciones(DataRecomendaciones);

            $('#ModalAddModifyPlanMejora').modal('close');
            M.toast({html: 'Datos actualizados correctamente', classes: 'green darken-2 rounded'});
        }else if( Data.Status == "Error" ){
            M.toast({html: 'Error en el servidor.', classes: 'red darken-2 rounded'});
        }else{
            M.toast({html: 'Error. Agregue los datos correctamente <br> en su respectivo campo.', classes: 'green darken-2 rounded'});
        }

    });

}

/* ----------------------------------       CLICK EVENTS FOR INSERT OR UPDATE DATA    ---------------------- */

$('.btn-save-project-information').on('click', function(){
    var ProjectData = ReadForm_ProjectData();
    Insert_ProjectData( ProjectData );
});

$('.btn-update-project-information').on('click', function(){
    var ProjectData = ReadForm_ProjectData();
    Update_ProjectData( ProjectData );
});

$('.btn-insert-evaluation-information').on('click', function(){
    var EvaluationData = ReadForm_EvaluationData();
    Insert_EvaluationData( EvaluationData );
});

$('.btn-update-evaluation-information').on('click', function(){
    var EvaluationData = ReadForm_EvaluationData();
    Update_EvaluationData( EvaluationData );
});

$('.btn-insert-opinion-general').on('click', function(){
    var OpinionGeneral = ReadForm_OpinionGeneral();
    Insert_OpinionGeneral( OpinionGeneral );
});

$('.btn-modify-general-comments').on('click', function(){
    var GeneralComments = {
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        ComentariosObservacionesGenerales: $('#txtComentarios').val(),
        ComentariosObservacionesPorTema:   $('#ComentariosObservacionesPorTema').val()
    }
    
    Update_GeneralComments(GeneralComments);
});

$('.btn-modify-specific-comments').on('click', function(){
    var GeneralComments = {
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        ComentariosObservacionesGenerales: $('#ComentariosObservacionesGenerales').val(),
        ComentariosObservacionesPorTema:   $('#txtComentarios').val()
    }
    
    Update_GeneralComments(GeneralComments);
});

$('.btn-add-plan-mejora').on('click', function(){
        $('#txtNumRecomendation').val("");
        $('#txtASM').val("");
        $('#txtActoresInvolucrados').val("");
        $('#select-nivel-prioridad').val("");
        $('#txtAccionMejora').val("");
        $('#txtResultadosEsperados').val("");
        $('#txtFecha').val("");
        $('#txtAreaResponsable').val("");
        $('#txtEvidenciasSolicitadas').val("");
        
        $(".btn-insert-recomendacion").show();
        $(".btn-update-recomendacion").hide();
});

$('.btn-insert-recomendacion').on('click', function(){
    
    var PrioridadVal = $('#select-nivel-prioridad').val(), Prioridad = "";
    var EstatusRecomendacion = $('#select-estatus').val(), Estatus = "";

    if( PrioridadVal == 1 )
        Prioridad = "Bajo";
    else if( PrioridadVal == 2 )
        Prioridad = "Medio";
    else if( PrioridadVal == 3 )
        Prioridad = "Alto";

    if( EstatusRecomendacion == 1 )
        Estatus = "Corregido";
    else if( EstatusRecomendacion == 2 )
        Estatus = "En proceso";
    else if( EstatusRecomendacion == 3 )
        Estatus = "Sin atender";

    var RecomendacionForm = {
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        IdentificadorRecomendacion: $('#txtNumRecomendation').val(),
        AspectoSusceptibleDeMejora: $('#txtASM').val(),
        TipoActoresInvolucradosEnSolucion: $('#txtActoresInvolucrados').val(),
        AccionDeMejora: $('#txtAccionMejora').val(),
        NivelDePrioridad: Prioridad,
        AreaResponsable: $('#txtAreaResponsable').val(),
        ResultadosEsperados: $('#txtResultadosEsperados').val(),
        EvidenciasSolicitadas: $('#txtEvidenciasSolicitadas').val(),
        FechaCompromisoDeCumplimiento: $('#txtFecha').val(),
        BanderaRecomendacionCompletada: Estatus
    }

    Insert_Recomendacion( RecomendacionForm );
});

$('.btn-update-recomendacion').on('click', function(){
    var PrioridadVal = $('#select-nivel-prioridad').val(), Prioridad = "";
    var EstatusRecomendacion = $('#select-estatus').val(), Estatus = "";

    if( PrioridadVal == 1 )
        Prioridad = "Bajo";
    else if( PrioridadVal == 2 )
        Prioridad = "Medio";
    else if( PrioridadVal == 3 )
        Prioridad = "Alto";

    if( EstatusRecomendacion == 1 )
        Estatus = "Corregido";
    else if( EstatusRecomendacion == 2 )
        Estatus = "En proceso";
    else if( EstatusRecomendacion == 3 )
        Estatus = "Sin atender";

    var RecomendacionForm = {
        ID_Project: ProjectInfo.ID_ProgramaProyecto,
        IdentificadorRecomendacion: $('#txtNumRecomendation').val(),
        AspectoSusceptibleDeMejora: $('#txtASM').val(),
        TipoActoresInvolucradosEnSolucion: $('#txtActoresInvolucrados').val(),
        AccionDeMejora: $('#txtAccionMejora').val(),
        NivelDePrioridad: Prioridad,
        AreaResponsable: $('#txtAreaResponsable').val(),
        ResultadosEsperados: $('#txtResultadosEsperados').val(),
        EvidenciasSolicitadas: $('#txtEvidenciasSolicitadas').val(),
        FechaCompromisoDeCumplimiento: $('#txtFecha').val(),
        BanderaRecomendacionCompletada: Estatus
    }

    Update_Recomendation( RecomendacionForm );
});

/* ----------------------------------           CLICK EVENTS TO MODIFY    --------------------------------- */

$('.btn-edit-project-information').on('click', function(){
    var FT_Project = JSON.parse( localStorage.getItem("FichaTecnicaProyecto"));

    $('#txtNombreProyecto').val( FT_Project.NombreProyecto ),
    $('#txtClaveProyecto').val( FT_Project.ClaveProyecto ),
    $('#txtDepen').val( FT_Project.DependenciaDelProyecto ),
    $('#txtSiglasDependencia').val( FT_Project.SiglasDependenciaProyecto ),
    $('#txtUR').val( FT_Project.UnidadResponsable ),
    $('#txtSiglasUR').val( FT_Project.SiglasUnidadResponsable ),
    $('#txtResponsable').val( FT_Project.NombreResponsable )
});

$('.btn-edit-evaluation-information').on('click', function(){
    var FT_Evaluation = JSON.parse( localStorage.getItem("FichaTecnicaEvaluacion") );

    $("#txtInstanciaEvaluadora").val( FT_Evaluation.InstanciaEvaluadora );
    $("#txtNombreEvaluacion").val( FT_Evaluation.NombreDeEvaluacion );
    $("#txtTipoEvaluacion").val( FT_Evaluation.TipoEvaluacion );
    $("#txtYearEvaluation").val( FT_Evaluation.AñoDeEvaluacion );
    $("#txtNombreInforme").val( FT_Evaluation.NombreDelInforme );
    $("#txtCostoEvaluacion").val( FT_Evaluation.CostoEvaluacion );
});

$('.btn-edit-opinion-general').on('click', function(){

    $('#txtPorTema').val( OpinionGeneral.ComentariosObservacionesPorTema ) ;
    M.textareaAutoResize($('#txtPorTema'));
});

$('.btn-edit-general-comments').on('click', function(){
    var OpinionGeneral = JSON.parse( localStorage.getItem("OpinionGeneral") );

    $('#txtComentarios').val( OpinionGeneral.ComentariosObservacionesGenerales );
    M.textareaAutoResize($('#txtComentarios'));

    $('.btn-modify-specific-comments').hide();
    $('.btn-modify-general-comments').show();
});

$('.btn-edit-specific-comments').on('click', function(){
    var OpinionGeneral = JSON.parse( localStorage.getItem("OpinionGeneral") );

    $('#txtComentarios').val( OpinionGeneral.ComentariosObservacionesPorTema );
    M.textareaAutoResize($('#txtComentarios'));

    $('.btn-modify-specific-comments').show();
    $('.btn-modify-general-comments').hide();
});

/*
$('.table-body-content-mejoras').on('mouseover', 'tr', 'td', function(){
    $(this).find('.delete-recomendation-container').show();
    $(this).siblings().find('.delete-recomendation-container').hide();
});
*/

$('.table-body-content-mejoras').on('click', 'tr', 'td', function(){
    var RecomendacionesFind = JSON.parse( localStorage.getItem("Recomendaciones") );
    console.log( RecomendacionesFind );
    var NumRecomendation = $(this).find('.NumASM').text();

    var DataUpdate;
    var Estatus;
    var val_select = 0;

    for(var i = 0; i<RecomendacionesFind.Length; i++){
        console.log( RecomendacionesFind[i].IdentificadorRecomendacion, " < = > ", NumRecomendation );
        
        if( RecomendacionesFind[i].IdentificadorRecomendacion == NumRecomendation )
            DataUpdate = RecomendacionesFind[i];
    }

    console.log( DataUpdate.NivelDePrioridad );
    if( DataUpdate.NivelDePrioridad == "Bajo" ){
        val_select = '1';
    }else if( DataUpdate.NivelDePrioridad == "Medio" ){
        val_select = '2';
    }else if( DataUpdate.NivelDePrioridad == "Alto" ){
        val_select = '3';
    }

    console.log( DataUpdate.BanderaRecomendacionCompletada );
    if( DataUpdate.BanderaRecomendacionCompletada == "Corregido" )
        Estatus = '1';
    else if( DataUpdate.BanderaRecomendacionCompletada == "En proceso" )
        Estatus = '2';
    else if( DataUpdate.BanderaRecomendacionCompletada == "Sin atender" )
        Estatus = '3';

    $('#txtNumRecomendation').val( DataUpdate.IdentificadorRecomendacion );
    M.textareaAutoResize( $('#txtNumRecomendation') );

    $('#txtASM').css('height', 'auto');
    M.textareaAutoResize( $('#txtASM') );

    $('#txtASM').val( DataUpdate.AspectoSusceptibleDeMejora );
    M.textareaAutoResize( $('#txtASM') );

    $('#txtActoresInvolucrados').val( DataUpdate.TipoActoresInvolucradosEnSolucion );
    M.textareaAutoResize( $('#txtActoresInvolucrados') );

    $('#select-nivel-prioridad').val( val_select );
    $('#select-estatus').val( Estatus );

    $('#txtAccionMejora').val( DataUpdate.AccionDeMejora );
    M.textareaAutoResize( $('#txtAccionMejora') );

    $('#txtResultadosEsperados').val( DataUpdate.ResultadosEsperados );
    M.textareaAutoResize( $('#txtResultadosEsperados') );

    $('#txtFecha').val( DataUpdate.FechaCompromisoDeCumplimiento );
    M.textareaAutoResize( $('#txtFecha') );

    $('#txtAreaResponsable').val( DataUpdate.AreaResponsable );
    M.textareaAutoResize( $('#txtAreaResponsable') );

    $('#txtEvidenciasSolicitadas').val( DataUpdate.EvidenciasSolicitadas );
    M.textareaAutoResize( $('#txtEvidenciasSolicitadas') );

    $(".btn-insert-recomendacion").hide();
    $(".btn-update-recomendacion").show();

    $('#ModalAddModifyPlanMejora').modal('open');
});

//  Botones para los documentos
$('.card-content-mejoras').on('mouseenter', '.card-recomendation', function(){
    $(this).find('.button-options-recomendation-container').css('display', 'block');
});

$('.card-content-mejoras').on('mouseleave', '.card-recomendation', function(){
    $(this).find('.button-options-recomendation-container').css('display', 'none');
});

$('.card-content-mejoras').on('click', '.card-recomendation', function(){
    
    //.title-document font-weight: 400;
});

/* - - - - - -- - - - - - - - - - - - - - CLICK EVENTS FOR DELETES - - - -- - - - - - - - ---- - ---- - -- -- */

$('.btn-delete-recomendacion').on('click', function(){
});

/* ---------------------------------------------------------------------------------------------------------- */
/*
var FichaTecnicaProyecto    = JSON.parse( localStorage.getItem("FichaTecnicaProyecto"   ));
var FichaTecnicaEvaluacion  = JSON.parse( localStorage.getItem("FichaTecnicaEvaluacion" ));
var OpinionGeneral          = JSON.parse( localStorage.getItem("OpinionGeneral"         ));
var Recomendaciones         = JSON.parse( localStorage.getItem("Recomendaciones"        ));
var DocumentosProyecto      = JSON.parse( localStorage.getItem("DataDocuments"          ));
*/