
var UserData = JSON.parse( localStorage.getItem('UserData') );

//  Agregamos la información del usuario al sub menú y el nombre de la sección
$('.name-user').text( UserData.Nombre + " " + UserData.Apellidos  );
$('.email-user').text( UserData.Correo );
$('.profile-user').text( UserData.Perfil );
$('.profile-user').css({
    'font-size': '28px',
    'margin-top': '40px'
});

//  Ocultamos los accesos directos a las notificaciones
$('.notifications-shortcut').hide();

//  Seleccionamos la sección de Información general y ocultamos las otras secciones
$('.name-section').text( "Información general" );
$('#general_information').fadeIn();
$('#posicionamiento').hide();
$('#plan_de_mejora').hide();
$('#formalizacion').hide();

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
    

    Read_ProgramProjectInformation();
});

// *****   INFORMACIÓN GENERAL DEL PROYECTO   ******
// * * (U) Update

function Update_AvanceProgramaProyecto(datos){

    $.post('Controller/UpdateController.php', {TypeData: "UpdateAvanceProgramaProyecto", Data: datos}, function(response){
        var Response = JSON.parse( response );
        console.log(Response);

        if( Response.Status == "Correct" ){
            console.log('Avance del proyecto actualizado correctamente');
            $('#ModalAddModifyTechnicalProjectInfo').modal('close');
        }else{
            console.log('Error al actualizar el avance del proyecto');
        }

    });
}

// *****   FICHA TÉCNICA DEL PROYECTO   ******
// * * * * Funciones CRUD y eventos:
// * * (R) Read
// * * (U) Update


// * * (R) Read
function Read_ProgramProjectInformation(){
    var ProgramProject = JSON.parse( localStorage.getItem('ProgramProject') );

    $.post("Controller/ReadController.php", {ID: ProgramProject.ID_Usuario, TypeData: "ProgramProjectInfo"}, function( Response ) {
        var Info = JSON.parse( Response );
        localStorage.setItem( "ProgramProjectInfo", JSON.stringify(Info) );
    }).done(function(){
        Show_ProgramProjectInformation();

        Read_EvaluationInformation();
        Read_GeneralOpinion();
    }).fail(function(){
        $('.preloader-ft-program').fadeOut();
        $('.table-ficha-tecnica-proyecto').hide();
        $('.NoFTProjectInformation').show();
        $('.NoFTProjectInformation').empty().text('Error');
    });
}

function Set_DataProjectProgramaForm(){
    var ProgramProject = JSON.parse( localStorage.getItem('ProgramProjectInfo') );

    $('.NombreProyecto'         ).text( ProgramProject.Nombre );
    $('.ClaveProyecto'          ).text( ProgramProject.Clave );
    $('.DependenciaProyecto'    ).text( ProgramProject.DependenciaResponsable );
    $('.SiglasDependencia'      ).text( ProgramProject.SiglasDR );
    $('.UnidadResponsable'      ).text( ProgramProject.UnidadResponsable );
    $('.SiglasUnidadResponsable').text( ProgramProject.SiglasUR );
    $('.NombreResponsable'      ).text( ProgramProject.NombreResponsable );
}

function Show_ProgramProjectInformation(){
    var ProgramProject = JSON.parse( localStorage.getItem('ProgramProjectInfo') );

    // Clave del programa o proyecto
    $('.name-program_project-header').text(" / "+ProgramProject.Clave+" (Validador)");

    if( ProgramProject.Status == "Correct" ){

        if( ProgramProject.EstadoValidacion == "Sin información" ){
            // Ocultamos el botón para validar y el ícono indicador de la validación
            $('.validated-ft-programa').hide();
            $('.btn-validate-info').hide();

            // Mostramos la leyenda "Sin información registrada"
            $('.table-ficha-tecnica-proyecto').hide();
            $('.NoFTProjectInformation').show();
        }else if( ProgramProject.EstadoValidacion == "Información capturada" ){

            // Ocultamos el botón para validar y el ícono indicador de la validación
            $('.validated-ft-programa').hide();
            $('.btn-validate-info').hide();

            // Mostramos la leyenda "Sin información registrada"
            Set_DataProjectProgramaForm();
            $('.table-ficha-tecnica-proyecto').show();
            $('.NoFTProjectInformation').hide();
        }else if( ProgramProject.EstadoValidacion == "Enviada para validación" ){
            // Ocultamos el botón para validar y el ícono indicador de la validación
            $('.validated-ft-programa').hide();
            $('.btn-validate-info').show();

            // Mostramos la leyenda "Sin información registrada"
            Set_DataProjectProgramaForm();
            $('.table-ficha-tecnica-proyecto').show();
            $('.NoFTProjectInformation').hide();
        }else if( ProgramProject.EstadoValidacion == "Información validada" ){
            // Ocultamos el botón para validar y el ícono indicador de la validación
            $('.validated-ft-programa').show();
            $('.btn-validate-info').hide();

            // Mostramos la leyenda "Sin información registrada"
            Set_DataProjectProgramaForm();
            $('.table-ficha-tecnica-proyecto').show();
            $('.NoFTProjectInformation').hide();
        }

    }else if( ProgramProject.Status == "Empty" ){
        // Mostramos/Ocultamos botomes e indicadores en el título
        $('.validated-ft-programa').hide();
        $('.btn-validate-info').hide();

        // Mostramos/ocultados tabla o mensaje de "Sin información"
        $('.table-ficha-tecnica-proyecto').hide();
        $('.NoFTProjectInformation').show();
    }else if( ProgramProject.Status == "Error" ){
        // Ocultamos todos los objetos debido a un error
        $('.wait-validation-ft-program').hide();
        $('.validation-ft-program').hide();
        $('.btn-add-project-information').hide();
        $('.btn-edit-project-information').hide();

        $('.table-ficha-tecnica-proyecto').hide();
        $('.NoFTProjectInformation').empty().show();
        $('.NoFTProjectInformation').text("Error");
    }

    $('.preloader-ft-program').fadeOut();
}

// * * (U) Update

function Update_ValidateProgramProjectInformation(){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var data = {
        ID_ProgramaProyecto: ProInfo.ID_ProgramaProyecto,
        PorcentajeAvance: ProInfo.PorcentajeAvance
    }

    $.post('Controller/UpdateController.php', {TypeData: "ValidateInformationProgramProject", Data: data}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Ficha técnica del programa/proyecto <br> validada correctamente', classes: 'green darken-2 rounded'});
            $('#ModalValidateTechnicalProjectInfo').modal('close');
            Read_ProgramProjectInformation();
        }else{
            M.toast({html: 'Error al enviar para validación', classes: 'red lighten-1 rounded'});
        }

    });
}

$('.btn-validate-project-information').on('click', function(){
    Update_ValidateProgramProjectInformation();
});

// *****   FICHA TÉCNICA DE LA EVALUACIÓN   ******
// * * * * Funciones CRUD y eventos:
// * * (R) Read
// * * (U) Update

// * * (R) Read
function Read_EvaluationInformation(){
    var ProgramProject = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );

    $.post("Controller/ReadController.php", {TypeData: "ReadEvaluationInfo", ID: ProgramProject.ID_ProgramaProyecto}, function( response ) {
        var Response = JSON.parse( response );
        localStorage.setItem('Evaluation', JSON.stringify( Response ));
    }).done(function(){
        $('.preloader-ft-evaluation').fadeOut();
        Show_EvaluationInformation();
    }).fail(function(){
        
    });
}

// * * * Show function
function AssignEvaluationData2Table(){
    var EvaluationData = JSON.parse( localStorage.getItem('Evaluation') );

    $('.InstanciaEvaluadora ').text( EvaluationData.InstanciaEvaluadora  );
    $('.NombreDeEvaluacion  ').text( EvaluationData.NombreDeLaEvaluacion );
    $('.TipoEvaluacion      ').text( EvaluationData.TipoDeEvaluacion     );
    $('.AñoDeEvaluacion     ').text( EvaluationData.AñoDeEvaluacion      );
    $('.NombreDelInforme    ').text( EvaluationData.NombreDelInforme     );
    $('.CostoEvaluacion     ').text( EvaluationData.CostoEvaluacion      );
}

function Show_EvaluationInformation(){
    var EvaluationData = JSON.parse( localStorage.getItem('Evaluation') );

    if( EvaluationData.Status == "Correct" ){

        if( EvaluationData.EstadoValidacion == "Sin información" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA VALIDAR LA FICHA TÉCNICA
            $('.validation-ft-evaluation').hide();
            $('.btn-validate-info-evaluation').hide();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            $('.table-evaluation').hide();
            $('.NoFTEvaluationInformation').show();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').hide();
        }else if( EvaluationData.EstadoValidacion == "Información capturada" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA VALIDAR LA FICHA TÉCNICA
            $('.validation-ft-evaluation').hide();
            $('.btn-validate-info-evaluation').hide();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            AssignEvaluationData2Table();
            $('.table-evaluation').show();
            $('.NoFTEvaluationInformation').hide();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').show();
        }else if( EvaluationData.EstadoValidacion == "Enviada para validación" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA VALIDAR LA FICHA TÉCNICA
            $('.validation-ft-evaluation').hide();
            $('.btn-validate-info-evaluation').show();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            AssignEvaluationData2Table();
            $('.table-evaluation').show();
            $('.NoFTEvaluationInformation').hide();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').hide();
        }else if( EvaluationData.EstadoValidacion == "Información validada" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA VALIDAR LA FICHA TÉCNICA
            $('.validation-ft-evaluation').show();
            $('.btn-validate-info-evaluation').hide();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            AssignEvaluationData2Table();
            $('.table-evaluation').show();
            $('.NoFTEvaluationInformation').hide();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').hide();
        }

    }else if( EvaluationData.Status == "Empty" ){
        //MOSTRAMOS UNICAMENTE EL BOTÓN PARA VALIDAR LA FICHA TÉCNICA
        $('.validation-ft-evaluation').hide();
        $('.btn-validate-info-evaluation').hide();

        // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
        $('.table-evaluation').hide();
        $('.NoFTEvaluationInformation').show();

        // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
        $('.btn-send-validation-evaluation').hide();
    }else if( EvaluationData.Status == "Error" ){
        // Ocultamos todos los objetos debido a un error
        $('.validation-ft-evaluation').hide();
        $('.btn-edit-evaluation-information').hide();

        $('.table-evaluation').hide();
        $('.NoFTEvaluationInformation').empty().show();
        $('.NoFTEvaluationInformation').text("Error");
    }
}

// * * (U) Update
function Update_ValidateEvaluationInformation(){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var avance = parseInt(ProInfo.PorcentajeAvance) + 5;

    datos = {
        ID_ProgramaProyecto:  ProInfo.ID_ProgramaProyecto,
        PorcentajeAvance:     avance,
        Etapa:                ProInfo.Etapa,
        SubEtapa:             ProInfo.SubEtapa,
    }

    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );

    $.post('Controller/UpdateController.php', {TypeData: "ValidateInformationEvaluation", Data: ProInfo.ID_ProgramaProyecto}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Ficha técnica del programa/proyecto <br> validada correctamente', classes: 'green darken-2 rounded'});
            $('#ModalValidateTechnicalEvaluationInfo').modal('close');
            Read_EvaluationInformation();
        }else{
            M.toast({html: 'Error al enviar para validación', classes: 'red lighten-1 rounded'});
        }

    }).done(function(){
        Update_AvanceProgramaProyecto(datos);
    });
}

$('.btn-validate-evaluation-information').on('click', function(){
    Update_ValidateEvaluationInformation();
});

// *****   OPINIÓN GENERAL   ******
// * * * * Funciones CRUD y eventos:
// * * (C) Create
// * * (R) Read
// * * (U) Update

// * * * (R) Read
function Set_GeneralOpinion_Textbox(){
    var GO = JSON.parse( localStorage.getItem('GeneralOpinion') );

    $('#txtMainOpinionGeneral').val( GO.ComentariosGenerales );
    M.textareaAutoResize($('#txtMainOpinionGeneral'));
}

function Show_GeneralOpinion(){
    var GO = JSON.parse( localStorage.getItem('GeneralOpinion') );
    var ProgramProject = JSON.parse( localStorage.getItem('ProgramProjectInfo') );

    $('.nombre-programa').text(ProgramProject.Clave);

    if( GO.Status == "Correct" ){

        if( GO.EstadoValidacion == "Información capturada" ){
            //  Ocultamos botones
            $('.indicator-general-opinion-validate').hide();
            $('.btn-modal2validate-general-opinion').hide();

            //  Ocultamos el contenedor del texto para la opinión general
            Set_GeneralOpinion_Textbox();
            $('#txtMainOpinionGeneral').show();

            // Ocultamos el mensaje de que no existe una Opinión General
            $('.OG_SinInfo').hide();

            //  Mostramos el contenedor para la observación
            $('.OpinionGeneralObservaciones-Container').show();
        }else if( GO.EstadoValidacion == "Enviada para validación" ){
            // Ocultamos botones
            $('.indicator-general-opinion-validate').hide();
            $('.btn-modal2validate-general-opinion').show();

            //Ocultamos el contenedor del texto para la opinión general
            Set_GeneralOpinion_Textbox();
            $('#txtMainOpinionGeneral').show();

            // Ocultamos el mensaje de que no existe una Opinión General
            $('.OG_SinInfo').hide();

            //  Mostramos el contenedor para la observación
            $('.OpinionGeneralObservaciones-Container').show();
        }else if( GO.EstadoValidacion == "Información validada" ){

            console.log( '<<<< Opinión general validada >>>>' );
            //  Ocultamos botones
            $('.indicator-general-opinion-validate').show();
            $('.btn-modal2validate-general-opinion').hide();

            //  Ocultamos el contenedor del texto para la opinión general
            Set_GeneralOpinion_Textbox();
            $('#txtMainOpinionGeneral').show();

            //  Mostramos el mensaje de que no existe una Opinión General
            $('.OG_SinInfo').hide();

            //  Ocultamos el contenedor para la observación
            $('.OpinionGeneralObservaciones-Container').hide();
        }

        console.log( GO );
        if( GO.ConObservacion == "1" ){
            $('.OpinionGeneralObservaciones-Container').show();
            $('#txtOpinionGeneral-ValidatorObservation').val( GO.Descripcion );
            $('#txtObservationValueModal').val( GO.Descripcion );

            $('.OpinionGeneral-ObservacionesBody').show();
            $('.OpinionGeneral-NoObservacionesBody').hide();
        }else{
            if( GO.Estado == "Observación atendida" ){
                $('.NoValidatorObservation-title').text( GO.Estado );
                $('.TxtLastObservation').text( GO.Descripcion );
    
                $('.OpinionGeneralObservaciones-Container').show();
                $('.OpinionGeneral-ObservacionesBody').hide();
                $('.OpinionGeneral-NoObservacionesBody').show();                
            }else{
                $('.NoValidatorObservation-title').text( GO.Estado );
                $('.TxtLastObservation').hide();
    
                $('.OpinionGeneralObservaciones-Container').hide();
                $('.OpinionGeneral-ObservacionesBody').hide();
                $('.OpinionGeneral-NoObservacionesBody').show();
            }
        }
        
    }else if( GO.Status == "Empty" ){
        // Ocultamos botones
        $('.wait-validation-general-opinion').hide();
        $('.validation-general-opinion').hide();
        $('.btn-add-general-opinion').show();
        $('.btn-edit-general-opinion').hide();

        //Ocultamos el contenedor del texto para la opinión general
        $('#txtMainOpinionGeneral').hide();

        // Mostramos el mensaje de que no existe una Opinión General
        $('.OG_SinInfo').show();
    }else if( GO.Status == "Error" ){
        $('.wait-validation-general-opinion').hide();
        $('.validation-general-opinion').hide();
        $('.btn-add-general-opinion').hide();
        $('.btn-edit-general-opinion').show();

        $('.txtMainOpinionGeneral').hide();
        $('.OG_SinInfo').hide();        
    }
}

function Read_GeneralOpinion(){
    var ProgramProject = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );

    $.post("Controller/ReadController.php", {TypeData: "OpinionGeneralInfo", ID: ProgramProject.ID_ProgramaProyecto}, function( response ){
        var Response = JSON.parse( response );

        localStorage.setItem("GeneralOpinion", JSON.stringify(Response) );
    }).done(function(){
        Show_GeneralOpinion();
    });
}

// * * * Update
$('.btn-validate-general-opinion').on('click', function(){
    Update_ValidateGeneralOpinion('Información validada');
});

function Update_ValidateGeneralOpinion(estado_validacion){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var avance = parseInt(ProInfo.PorcentajeAvance) + 5;

    var data = {
        ID_ProgramaProyecto: ProInfo.ID_ProgramaProyecto,
        EstadoValidacion: estado_validacion
    }

    var avance_datos = {
        ID_ProgramaProyecto:  ProInfo.ID_ProgramaProyecto,
        PorcentajeAvance:     avance,
        Etapa:                'Posicionamiento',
        SubEtapa:             'Opinión general validada',
    }

    $.post('Controller/UpdateController.php', {TypeData: "UpdateSendValidationGeneralOpinion", Data: data}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Opinión general validada correctamente', classes: 'green darken-2 rounded'});
            $('#ModalValidateGeneralOpinion').modal('close');

            Read_GeneralOpinion();
        }else{
            M.toast({html: 'Error al validar la opinión general', classes: 'red lighten-1 rounded'});
        }

    }).done(function(){
        Update_AvanceProgramaProyecto(avance_datos);
    });
}

// * * * Events
$('.btn-add-og-observation').on('click', function(){
    $('.btn-OG-Add-Observation').show();
    $('.btn-OG-Modify-Observation').hide();
});

$('.btn-edit-og-observation').on('click', function(){
    $('.btn-OG-Add-Observation').hide();
    $('.btn-OG-Modify-Observation').show();
});

// *****   OBSERVACIONES   ******
// * * * * Funciones CRUD y eventos:
// * * (C) Create
// * * (R) Read
// * * (U) Update

function Read_ObservacionById(data){

    $.post('Controller/ReadController.php', {TypeData: "ReadObservation", Data: data}, function(response){
        console.log(response);
    });
}
