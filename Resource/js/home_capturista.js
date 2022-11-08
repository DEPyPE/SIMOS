
var UserData = JSON.parse( localStorage.getItem('UserData') );
Read_ProgramProjectInformation();

//  Ocultamos el acceso directo a los proyecos registrados y las notificaciones
$('.home-projects-shortcut').hide();
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

});

// *****   INFORMACIÓN GENERAL DEL PROYECTO   ******
// * * (U) Update

function Update_AvanceProgramaProyecto(Avance){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );

    datos = {
        ID_ProgramaProyecto:  ProInfo.ID_ProgramaProyecto,
        PorcentajeAvance:     Avance.PorcentajeAvance,
        Etapa:                Avance.Etapa,
        SubEtapa:             Avance.SubEtapa,
    }

    $.post('Controller/UpdateController.php', {TypeData: "UpdateAvanceProgramaProyecto", Data: datos}, function(response){
        var Response = JSON.parse( response );

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
// * * (C) Create
// * * (R) Read
// * * (U) Update

// * * (R) READ
function Read_ProgramProjectInformation(){
    $.post("Controller/ReadController.php", {ID: UserData.ID_Usuario, TypeData: "ProgramProjectInfo"}, function( Response ) {
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

function AssignData2Table( ProgramProjectInfo ){
    $('.NombreProyecto'         ).text( ProgramProjectInfo.Nombre );
    $('.ClaveProyecto'          ).text( ProgramProjectInfo.Clave );
    $('.DependenciaProyecto'    ).text( ProgramProjectInfo.DependenciaResponsable );
    $('.SiglasDependencia'      ).text( ProgramProjectInfo.SiglasDR );
    $('.UnidadResponsable'      ).text( ProgramProjectInfo.UnidadResponsable );
    $('.SiglasUnidadResponsable').text( ProgramProjectInfo.SiglasUR );
    $('.NombreResponsable'      ).text( ProgramProjectInfo.NombreResponsable );
}

function Show_ProgramProjectInformation(){
    var ProgramProjectInfo = JSON.parse( localStorage.getItem('ProgramProjectInfo') );

    //  Mostramos el nombre del usuario y su perfil
    $('.user-info-header').text( "/ "+ProgramProjectInfo.Clave+" ("+UserData.Perfil+")" );
    
    if( ProgramProjectInfo.Status == "Correct" ){

        if( ProgramProjectInfo.EstadoValidacion == "Sin información" ){
            // Mostramos/Ocultamos botomes e indicadores en el título
            $('.wait-validation-ft-program').hide();
            $('.validation-ft-program').hide();
            $('.btn-add-project-information').show();
            $('.btn-edit-project-information').hide();

            // Mostramos/ocultados tabla o mensaje de "Sin información"
            $('.table-ficha-tecnica-proyecto').hide();
            $('.NoFTProjectInformation').show();

            // Botón para validar información
            $('.btn-validate-ft-program-project').hide();
        }else if( ProgramProjectInfo.EstadoValidacion == "Información capturada" ){           
            // Mostramos/Ocultamos botomes e indicadores en el título
            $('.wait-validation-ft-program').hide();
            $('.validation-ft-program').hide();
            $('.btn-add-project-information').hide();
            $('.btn-edit-project-information').show();

            // Mostramos/ocultados tabla o mensaje de "Sin información"
            AssignData2Table(ProgramProjectInfo);
            $('.table-ficha-tecnica-proyecto').show();
            $('.NoFTProjectInformation').hide();

            // Botón para validar información
            $('.btn-validate-ft-program-project').show();
        }else if( ProgramProjectInfo.EstadoValidacion == "Enviada para validación" ){
            // Mostramos/ocultamos botones e indicadores del estatus de los datos
            $('.wait-validation-ft-program').show();
            $('.validation-ft-program').hide();
            $('.btn-add-project-information').hide();
            $('.btn-edit-project-information').hide();

            // Mostramos la tabla con los datos
            AssignData2Table(ProgramProjectInfo);
            $('.table-ficha-tecnica-proyecto').show();
            $('.NoFTProjectInformation').hide();

            // Botón para validar información
            $('.btn-validate-ft-program-project').hide();
        }else if( ProgramProjectInfo.EstadoValidacion == "Información validada" ){
            // Mostramos/ocultamos botones e indicadores del estatus de los datos
            $('.wait-validation-ft-program').hide();
            $('.validation-ft-program').show();
            $('.btn-add-project-information').hide();
            $('.btn-edit-project-information').hide();

            // Mostramos la tabla con los datos
            AssignData2Table(ProgramProjectInfo);
            $('.table-ficha-tecnica-proyecto').show();
            $('.NoFTProjectInformation').hide();

            // Botón para validar información
            $('.btn-validate-ft-program-project').hide();
        }

    }else if( ProgramProjectInfo.Status == "Error" ){
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

// * * (C) CREATE
function Get_DataProjectFromModal(){
    var txtDataProject = {
            NombreProyecto:          $('#txtNombreProyecto'         ).val(),
            ClaveProyecto:           $('#txtClaveProyecto'          ).val(),
            DependenciaProyecto:     $('#txtDependenciaProyecto'    ).val(),
            SiglasDependencia:       $('#txtSiglasDependencia'      ).val(),
            UnidadResponsable:       $('#txtUnidadResponsable'      ).val(),
            SiglasUnidadResponsable: $('#txtSiglasUnidadResponsable').val(),
            NombreResponsable:       $('#txtNombreResponsable'      ).val(),
    }

    return txtDataProject;
}

function Save_ProgramProjectData(){
    Read_ProgramProjectInformation();

    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var data = Get_DataProjectFromModal();
    var PorceAvance;

    console.log( ProInfo.EstadoValidacion );
    if( ProInfo.EstadoValidacion == "Sin información" ){
        PorceAvance = 5;
    }else{
        PorceAvance =  ProInfo.PorcentajeAvance;
    }

    var UpdateAvance = {
        PorcentajeAvance:     PorceAvance,
        Etapa:                'Información general',
        SubEtapa:             'Información capturada del programa o proyecto',
    }

    data.ID_ProgramaProyecto = ProInfo.ID_ProgramaProyecto;

    $.post('Controller/CreateController.php', {TypeData: "InsertDataProgramProject", Data: data}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyTechnicalProjectInfo').modal('close');

            Read_ProgramProjectInformation();
        }else{
            M.toast({html: 'Error al guardar los datos', classes: 'red lighten-1 rounded'});
        }

    }).done(function(){
        Update_AvanceProgramaProyecto( UpdateAvance );
    });
}

$('.btn-save-data-project-information').on('click', function(){
    Save_ProgramProjectData();
});

// * * (U) UPDATE DATA OF THE DATABASE
function Set_DataProject2Modal(){
    var ProgramProjectInfo = JSON.parse( localStorage.getItem('ProgramProjectInfo') );
    console.log( ProgramProjectInfo );

    $('#txtNombreProyecto'         ).val( ProgramProjectInfo.Nombre                  );
    $('#txtClaveProyecto'          ).val( ProgramProjectInfo.Clave                   );
    $('#txtDependenciaProyecto'    ).val( ProgramProjectInfo.DependenciaResponsable  );
    $('#txtSiglasDependencia'      ).val( ProgramProjectInfo.SiglasDR                );
    $('#txtUnidadResponsable'      ).val( ProgramProjectInfo.UnidadResponsable       );
    $('#txtSiglasUnidadResponsable').val( ProgramProjectInfo.SiglasUR                );
    $('#txtNombreResponsable'      ).val( ProgramProjectInfo.NombreResponsable       );
}

function Update_ValidateProgramProjectInformation(){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var ID_ProgramaProyecto = ProInfo.ID_ProgramaProyecto;

    $.post('Controller/UpdateController.php', {TypeData: "ValidatedProgramProjectInformation", ID: ID_ProgramaProyecto}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Ficha técnica del programa/proyecto <br> enviada a validación', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyTechnicalProjectInfo').modal('close');

            Read_ProgramProjectInformation();
        }else{
            M.toast({html: 'Error al enviar para validación', classes: 'red lighten-1 rounded'});
        }
    });
}

$('.btn-edit-project-information').on('click', function(){ 
    Set_DataProject2Modal();
});

$('.btn-validate-ft-program-project').on('click', function(){
    Update_ValidateProgramProjectInformation();
});

// *****   FICHA TÉCNICA DE LA EVALUACIÓN   ******
// * * * * Funciones CRUD y eventos:
// * * (C) Create
// * * (R) Read
// * * (U) Update

// * * * (C) Create
function Get_DataEvaluationFromModal(){
    var ProgramProjectInfo = JSON.parse( localStorage.getItem('ProgramProjectInfo') );  
    var Data = {
        ID_ProgramaProyecto:    ProgramProjectInfo.ID_ProgramaProyecto,
        InstanciaEvaluadora:    $('#txtInstanciaEvaluadora').val(),
        NombeDeLaEvaluacion:    $('#txtNombreEvaluacion').val(),
        TipoDeEvaluacion:       $('#txtTipoEvaluacion').val(),
        NombreDelInforme:       $('#txtNombreInforme').val(),
        AñoDeEvaluacion:        $('#txtYearEvaluation').val(),
        CostoEvaluacion:        $('#txtCostoEvaluacion').val()
    }

    return Data;
}

function Create_EvaluationData( TypeFunction ){
    Read_ProgramProjectInformation();
    var data = Get_DataEvaluationFromModal();
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var avance = parseInt(ProInfo.PorcentajeAvance) + 5;
    var method, Controller;

    console.log( 'Avance anterior => ' + ProInfo.PorcentajeAvance );
    console.log( 'Avance actual   => ' + avance );

    var UpdateAvance = {
        PorcentajeAvance:      avance,
        Etapa:                'Información general',
        SubEtapa:             'Información capturada de la evaluación',
    }

    if( TypeFunction == "Create" ){
        method = "InsertDataEvaluation";
        Controller = 'Controller/CreateController.php';
    }else if( TypeFunction == "Update" ){
        method = "UpdateDataEvaluation";
        Controller = 'Controller/UpdateController.php';
    }

    $.post(Controller, {TypeData: method, Data: data}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyTechnicalEvaluationInfo').modal('close');
    
            Read_EvaluationInformation();
        }else{
            M.toast({html: 'Error al guardar los datos', classes: 'red lighten-1 rounded'});
        }

    }).done(function(){
        if( TypeFunction == "Create" ){
            console.log('Actualizando el avance del proyecto');
            Update_AvanceProgramaProyecto( UpdateAvance );
        }else{
            console.log('Sin actualizar el avance');
        }
    });
}

$('.btn-save-evaluation-data').on('click', function(){
    var evaluationInfo = JSON.parse( localStorage.getItem("Evaluation") );
    var method;

    if( evaluationInfo.Status == "Empty" ){
        method = "Create";
    }else{
        method = "Update";
    }

    console.log( method );
    Create_EvaluationData(method);
});

// * * * (R) Read
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
    var costo = EvaluationData.CostoEvaluacion;

    nfObject = new Intl.NumberFormat('en-US');
    var CostoEvaluacion = nfObject.format(costo);

    $('.InstanciaEvaluadora ').text( EvaluationData.InstanciaEvaluadora  );
    $('.NombreDeEvaluacion  ').text( EvaluationData.NombreDeLaEvaluacion );
    $('.TipoEvaluacion      ').text( EvaluationData.TipoDeEvaluacion     );
    $('.AñoDeEvaluacion     ').text( EvaluationData.AñoDeEvaluacion      );
    $('.NombreDelInforme    ').text( EvaluationData.NombreDelInforme     );
    $('.CostoEvaluacion     ').text( '$ ' + CostoEvaluacion               );
}

function Show_EvaluationInformation(){
    var EvaluationData = JSON.parse( localStorage.getItem('Evaluation') );

    if( EvaluationData.Status == "Correct" ){

        if( EvaluationData.EstadoValidacion == "Sin información" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA AGREGAR DATOS DE LA EVALUACIÓN
            $('.wait-validation-ft-evaluation').hide();
            $('.validation-ft-evaluation').hide();
            $('.btn-add-evaluation-information').show();
            $('.btn-edit-evaluation-information').hide();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            $('.table-evaluation').hide();
            $('.NoFTEvaluationInformation').show();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').hide();
        }else if( EvaluationData.EstadoValidacion == "Información capturada" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA AGREGAR DATOS DE LA EVALUACIÓN
            $('.wait-validation-ft-evaluation').hide();
            $('.validation-ft-evaluation').hide();
            $('.btn-add-evaluation-information').hide();
            $('.btn-edit-evaluation-information').show();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            AssignEvaluationData2Table();
            $('.table-evaluation').show();
            $('.NoFTEvaluationInformation').hide();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').show();
        }else if( EvaluationData.EstadoValidacion == "Enviada para validación" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA AGREGAR DATOS DE LA EVALUACIÓN
            $('.wait-validation-ft-evaluation').show();
            $('.validation-ft-evaluation').hide();
            $('.btn-add-evaluation-information').hide();
            $('.btn-edit-evaluation-information').hide();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            AssignEvaluationData2Table();
            $('.table-evaluation').show();
            $('.NoFTEvaluationInformation').hide();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').hide();
        }else if( EvaluationData.EstadoValidacion == "Información validada" ){
            //MOSTRAMOS UNICAMENTE EL BOTÓN PARA AGREGAR DATOS DE LA EVALUACIÓN
            $('.wait-validation-ft-evaluation').hide();
            $('.validation-ft-evaluation').show();
            $('.btn-add-evaluation-information').hide();
            $('.btn-edit-evaluation-information').hide();

            // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
            AssignEvaluationData2Table();
            $('.table-evaluation').show();
            $('.NoFTEvaluationInformation').hide();

            // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
            $('.btn-send-validation-evaluation').hide();
        }

    }else if( EvaluationData.Status == "Empty" ){
        //MOSTRAMOS UNICAMENTE EL BOTÓN PARA AGREGAR DATOS DE LA EVALUACIÓN
        $('.wait-validation-ft-evaluation').hide();
        $('.validation-ft-evaluation').hide();
        $('.btn-add-evaluation-information').show();
        $('.btn-edit-evaluation-information').hide();

        // OCULTAMOS/MOSTRAMOS LA TABLA DE LOS DATOS Y EL MENSAJE
        $('.table-evaluation').hide();
        $('.NoFTEvaluationInformation').show();

        // OCULTAMOS EL BOTÓN DE ENVIAR PARA VALIDACIÓN
        $('.btn-send-validation-evaluation').hide();
    }else if( EvaluationData.Status == "Error" ){
        // Ocultamos todos los objetos debido a un error
        $('.wait-validation-ft-evaluation').hide();
        $('.validation-ft-evaluation').hide();
        $('.btn-add-evaluation-information').hide();
        $('.btn-edit-evaluation-information').hide();

        $('.table-evaluation').hide();
        $('.NoFTEvaluationInformation').empty().show();
        $('.NoFTEvaluationInformation').text("Error");
    }
}

// * * * (U) Update
function Set_DataEvaluation2Modal(){
    var EvaluationInfo = JSON.parse( localStorage.getItem('Evaluation') );

    $('#txtInstanciaEvaluadora  ').val(  EvaluationInfo.InstanciaEvaluadora  );
    $('#txtNombreEvaluacion     ').val(  EvaluationInfo.NombreDeLaEvaluacion  );
    $('#txtTipoEvaluacion       ').val(  EvaluationInfo.TipoDeEvaluacion     );
    $('#txtNombreInforme        ').val(  EvaluationInfo.NombreDelInforme     );
    $('#txtYearEvaluation       ').val(  EvaluationInfo.AñoDeEvaluacion      );
    $('#txtCostoEvaluacion      ').val(  EvaluationInfo.CostoEvaluacion      );
}

function Update_ValidateEvaluationInformation(){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var ID_ProgramaProyecto = ProInfo.ID_ProgramaProyecto;

    $.post('Controller/UpdateController.php', {TypeData: "UpdateEvaluationValidationStatus", ID: ID_ProgramaProyecto}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Ficha técnica de la evaluación <br> enviada a validación', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyTechnicalEvaluationInfo').modal('close');

            Read_EvaluationInformation();
        }else{
            M.toast({html: 'Error al enviar para validación', classes: 'red lighten-1 rounded'});
        }

    });
}

$('.btn-edit-evaluation-information').on('click', function(){
    Set_DataEvaluation2Modal();
});

$('.btn-send-validation-evaluation').on('click', function(){
    Update_ValidateEvaluationInformation();
});

// *****   OPINIÓN GENERAL   ******
// * * * * Funciones CRUD y eventos:
// * * (C) Create
// * * (R) Read
// * * (U) Update

// * * * (C) Create

function Create_GeneralOpinion(){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var data = {
        ID_ProgramaProyecto: ProInfo.ID_ProgramaProyecto,
        ComentariosGenerales: $('#txtOpinionGeneralModal').val(),
        EstadoValidacion: 'Información capturada'
    }

    var avance = {
        PorcentajeAvance:     parseInt(ProInfo.PorcentajeAvance) + 10,
        Etapa:                'Posicionamiento',
        SubEtapa:             'Opinión general capturada',
    }

    $.post('Controller/CreateController.php', {TypeData: "CreateGeneralOpinion", Data: data}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Datos guardados correctamente', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyGeneralOpinion').modal('close');
        }else{
            M.toast({html: 'Error al guardar los datos', classes: 'red lighten-1 rounded'});
        }

    }).done(function(){
        Read_GeneralOpinion();
        Update_AvanceProgramaProyecto(avance);
    });
}

$('.btn-add-general-opinion').on('click', function(){
    $('.btn-create-general-opinion').show();
    $('.btn-modify-general-opinion').hide();

    $('#txtMainOpinionGeneral').val("");
    M.textareaAutoResize($('#txtMainOpinionGeneral'));
});

$('.btn-create-general-opinion').on('click', function(){
    Create_GeneralOpinion();
});

// * * * (R) Read
function Set_GeneralOpinion_Textbox(){
    var GO = JSON.parse( localStorage.getItem('GeneralOpinion') );

    $('#txtMainOpinionGeneral').val( GO.ComentariosGenerales );
    M.textareaAutoResize($('#txtMainOpinionGeneral'));
}

function Show_GeneralOpinion(){
    var GO = JSON.parse( localStorage.getItem('GeneralOpinion') );
    console.log( GO );
    
    if( GO.Status == "Correct" ){

        if( GO.EstadoValidacion == "Información capturada" ){
            // Ocultamos botones
            $('.wait-validation-general-opinion').hide();
            $('.validation-general-opinion').hide();
            $('.btn-add-general-opinion').hide();
            $('.btn-edit-general-opinion').show();

            //Ocultamos el contenedor del texto para la opinión general
            Set_GeneralOpinion_Textbox();
            $('#txtMainOpinionGeneral').show();

            // Mostramos el mensaje de que no existe una Opinión General
            $('.OG_SinInfo').hide();
        }else if( GO.EstadoValidacion == "Enviada para validación" ){
            // Ocultamos botones
            $('.wait-validation-general-opinion').show();
            $('.validation-general-opinion').hide();
            $('.btn-add-general-opinion').hide();
            $('.btn-edit-general-opinion').hide();

            //Ocultamos el contenedor del texto para la opinión general
            Set_GeneralOpinion_Textbox();
            $('#txtMainOpinionGeneral').show();

            // Mostramos el mensaje de que no existe una Opinión General
            $('.OG_SinInfo').hide();
        }else if( GO.EstadoValidacion == "Información validada" ){
            // Ocultamos botones
            $('.wait-validation-general-opinion').hide();
            $('.validation-general-opinion').show();
            $('.btn-add-general-opinion').hide();
            $('.btn-edit-general-opinion').hide();

            //Ocultamos el contenedor del texto para la opinión general
            Set_GeneralOpinion_Textbox();
            $('#txtMainOpinionGeneral').show();

            // Mostramos el mensaje de que no existe una Opinión General
            $('.OG_SinInfo').hide();
        }
        
        if( GO.ConObservacion == "1" ){
            $('.OpinionGeneralObservaciones-Container').show();
            $('#txtOpinionGeneral-ValidatorObservation').val( GO.Descripcion );

            $('.OpinionGeneral-ObservacionesBody').show();
            $('.OpinionGeneral-NoObservacionesBody').hide();
        }else{
            $('.OpinionGeneralObservaciones-Container').hide();
            $('.OpinionGeneral-ObservacionesBody').hide();
            $('.OpinionGeneral-NoObservacionesBody').show();
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

        // Ocultamos la sección de las obsevaciones
        $('.OpinionGeneralObservaciones-Container').hide();
    }else if( GO.Status == "Error" ){
        $('.wait-validation-general-opinion').hide();
        $('.validation-general-opinion').hide();
        $('.btn-add-general-opinion').hide();
        $('.btn-edit-general-opinion').show();

        $('.txtMainOpinionGeneral').hide();
        $('.OG_SinInfo').hide();        

        // Ocultamos la sección de las obsevaciones
        $('.OpinionGeneralObservaciones-Container').hide();
    }
}

function Read_GeneralOpinion(){
    var ProgramProject = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );

    $.post("Controller/ReadController.php", {TypeData: "OpinionGeneralInfo", ID: ProgramProject.ID_ProgramaProyecto}, function( response ){
        var Response = JSON.parse( response );
        var data = {
            ID_ProgramaProyecto:    ProgramProject.ID_ProgramaProyecto,
            ID_Seccion:             Response.ID_OpinionGeneral,
            Seccion:                'Opinión general'
        }

        localStorage.setItem("GeneralOpinion", JSON.stringify(Response) );
    }).done(function(){
        Show_GeneralOpinion();
    });
}

// * * * Update
function Set_DataGeneralOpinion_Text2Modal(){
    var GO = JSON.parse( localStorage.getItem('GeneralOpinion') );

    $('#txtOpinionGeneralModal').val( $('#txtMainOpinionGeneral').val() );
    M.textareaAutoResize($('#txtOpinionGeneralModal'));
}

function Update_GeneralOpinion(){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var data = {
        ID_ProgramaProyecto: ProInfo.ID_ProgramaProyecto,
        ComentariosGenerales: $('#txtOpinionGeneralModal').val()
    }

    $.post('Controller/UpdateController.php', {TypeData: "UpdateGeneralOpinion", Data: data}, function(response){
        var Response = JSON.parse( response );
        //console.log( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Datos actualizados correctamente', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyGeneralOpinion').modal('close');
        }else{
            M.toast({html: 'Error al modificar los datos', classes: 'red lighten-1 rounded'});
        }

    }).done(function(){
        Read_GeneralOpinion();
    });
}

$('.btn-edit-general-opinion').on('click', function(){
    $('.btn-create-general-opinion').hide();
    $('.btn-modify-general-opinion').show();
    
    Set_DataGeneralOpinion_Text2Modal();
});

$('.btn-modify-general-opinion').on('click', function(){
    console.log( 'clicked' );
    Update_GeneralOpinion();
});

$('.btn-send-validation-general-opinion').on('click', function(){
    Update_ValidateGeneralOpinion('Enviada para validación');
});

$('.btn-validate-observation-OG').on('click', function(){
    console.log('Validando la observación realizada por parte del validador');
    Update_OG_AtendedObservation();
});

function Update_OG_AtendedObservation(){
    $.post('Controller/UpdateController.php', {TypeData: "UpdateOG_ValidationObservation"}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Observación validada', classes: 'green darken-2 rounded'});
            $('#ModalOGAtendedObservation').modal('close');

            Read_GeneralOpinion();
        }else{
            M.toast({html: 'Error al enviar para validación', classes: 'red lighten-1 rounded'});
        }

    });
}

function Update_ValidateGeneralOpinion(estado_validacion){
    var ProInfo = JSON.parse( localStorage.getItem( "ProgramProjectInfo" ) );
    var data = {
        ID_ProgramaProyecto: ProInfo.ID_ProgramaProyecto,
        EstadoValidacion: estado_validacion
    }

    $.post('Controller/UpdateController.php', {TypeData: "UpdateSendValidationGeneralOpinion", Data: data}, function(response){
        var Response = JSON.parse( response );

        if( Response.Status == "Correct" ){
            M.toast({html: 'Opinión general enviada a validación', classes: 'green darken-2 rounded'});
            $('#ModalAddModifyGeneralOpinion').modal('close');

            Read_GeneralOpinion();
        }else{
            M.toast({html: 'Error al enviar para validación', classes: 'red lighten-1 rounded'});
        }

    });
}
