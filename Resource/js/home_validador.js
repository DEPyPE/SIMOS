
var UserData = JSON.parse( localStorage.getItem('UserData') );

function Get_AllYearsOfProjects(){
    $('.select-ejercicio-fiscal').prop('disabled', 'disabled');

    $.post("Controller/ReadController.php", {ID: UserData.ID_Usuario, TypeData: "YearsOfProjects"}, function( Response ) {
        var Years = JSON.parse( Response );
        var select_txt = '';

        if( Years.Status == "Correct" ){
            localStorage.setItem('YearsProjects', JSON.stringify(Years));
            $('.row-ejercicio-fiscal').show();
            $('.no-data-ejercicio-fiscal').hide();

            for( var i = 0; i < Years.Length; i++ ){
                select_txt = select_txt + "<option value='"+Years[i]+"'>"+ Years[i] +"</option>";
            }
            
            $('.select-ejercicio-fiscal').html( select_txt );
            $('select').formSelect();
            $('.error-ejercicio-fiscal').hide();
            $('.select-ejercicio-fiscal').prop('disabled', '');

            Get_ProjectsByYear( Years[0] );
        }else if( Years.Status == "Empty" ){
            $('.row-ejercicio-fiscal').hide();
            $('.no-data-ejercicio-fiscal').show();
        }
        
    }).done(function(){
    }).fail(function(){
        $('.select-ejercicio-fiscal').prop('disabled', 'disabled');
        $('.error-ejercicio-fiscal').show();
    });
}

function Get_ProjectsByYear(year){
    $.post("Controller/ReadController.php", {Year: year, TypeData: "ProjectsByYear"}, function( Response ) {
        var ResponseJSON = JSON.parse( Response );
        console.log( "Año => ",year,", Proyectos => ", ResponseJSON );
        localStorage.setItem('ProgramsProjectsByYear', JSON.stringify(ResponseJSON));

    }).done(function(){
        Show_ProgramsProjectsByYear();
    }).fail(function(){
        
    });
}

function Show_ProgramsProjectsByYear(){
    var programs_proyects = JSON.parse( localStorage.getItem('ProgramsProjectsByYear') );
        
    var card_project = '';

    for(var i = 0; i < programs_proyects.Length; i++){
        card_project = card_project +
                    "<div class='col l3 m4 s12'>"+
                        "<div class='card card-registered-project'>"+
                            "<div class='card-content'>"+
                                "<span class='card-title card-title-project center-align'> <strong>"+programs_proyects[i].Clave+"</strong> </span>"+

                                "<div class='progress-bar-container'>"+
                                    "<div class='row row-porcentage'>"+
                                        "<div class='col l2 m3 s3'>"+
                                            "<h6 class='percentage-progress-text'>"+programs_proyects[i].PorcentajeAvance+"%</h6>"+
                                        "</div>"+

                                        "<div class='col l10 m9 s9'>"+
                                            "<div class='progress progress-per-project-container'>"+
                                                "<div style='width: "+programs_proyects[i].PorcentajeAvance+"%;' class='determinate progress-per-project'></div>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+

                                "<p class='project-stage-progress'> "+
                                    "<strong class='title-step'>Etapa: </strong> <span class='steps-content'>"+ programs_proyects[i].Etapa + "</span><br>" +
                                    "<strong class='title-step'>En proceso: </strong> <span class='steps-content'>"+ programs_proyects[i].SubEtapa + "</span>" +
                                "</p>"+
                                "<span class='id-project'>"+programs_proyects[i].ID_ProgramaProyecto+"</span>"+
                                "<a class='waves-effect btn blue darken-3 btn-open-project'>Revisar proyecto <i class='material-icons right'>launch</i></a>"+
                            "</div>"+
                        "</div>"+
                    "</div>";
    }

    $('.projects-container').hide();
    $('.projects-container').html( card_project );
    $('.projects-container').fadeIn();
}

function Show_DataUser(){
    $('.NameUser'       ).text( UserData.Nombre );
    $('.LastNameUser'   ).text( UserData.Apellidos );
    $('.EmailUser'      ).text( UserData.Correo );
    $('.ProfileUser'    ).text( UserData.Perfil );
}

$(function () {
    $('.collapsible').collapsible();
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    $('.modal').modal();
    $(".dropdown-trigger").dropdown();
    $('.slider').slider();

    // Asignamos nombre y perfil
    $('.user-info-header').text( '/ '+UserData.Nombre+' ('+ UserData.Perfil + ')' );

    Show_DataUser();
    Get_AllYearsOfProjects();
});

$('.projects-container').on('click', '.btn-open-project', function(){
    var elem_id = $(this).siblings('.id-project'); 
    var id_project = elem_id[0].innerText;
    var Projects = JSON.parse( localStorage.getItem('ProgramsProjectsByYear') );
    var VistaProyectosURL = "vista_por_proyecto.php";
    var SelectedProject;

    for(var i = 0; i < Projects.Length; i++){
        if( Projects[i].ID_ProgramaProyecto == id_project ){
            SelectedProject = Projects[i];
            break;
        }
    }

    SelectedProject.Status = "Correct";
    localStorage.setItem('ProgramProject', JSON.stringify(SelectedProject));
    window.location.href = VistaProyectosURL;
});

$('.select-ejercicio-fiscal').on('change', function(){
    var year = $(this).val();
    Get_ProjectsByYear( year );
});

