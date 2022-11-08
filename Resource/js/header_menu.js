
var UserData = JSON.parse( localStorage.getItem('UserData') );

$('.name-user').text( UserData.Nombre + " " + UserData.Apellidos  );
$('.email-user').text( UserData.Correo );
$('.profile-user').text( UserData.Perfil );

$(function(){
    $('.dropdown-trigger').dropdown();
});

$('#dropdown-menu-sections li').on('click', 'a', function(){
    var section = $(this)[0].innerHTML;

    $('.name-section').text( section );

    if( section == "Información general" ){
        $('#general_information').fadeIn();
        $('#posicionamiento').hide();
        $('#plan_de_mejora').hide();
        $('#formalizacion').hide();
    }else if( section == "Posicionamiento" ){
        $('#general_information').hide();
        $('#posicionamiento').fadeIn();
        $('#plan_de_mejora').hide();
        $('#formalizacion').hide();
    }else if( section == "Plan de mejora y monitoreo" ){
        $('#general_information').hide();
        $('#posicionamiento').hide();
        $('#plan_de_mejora').fadeIn();
        $('#formalizacion').hide();
    }else if( section == "Formalización" ){
        $('#general_information').hide();
        $('#posicionamiento').hide();
        $('#plan_de_mejora').hide();
        $('#formalizacion').fadeIn();
    }

});

// + --- + ---- + ---- + ---- + --- + ---- + ---- + ----- + ---- + ------ +

// * * Eventos de la sesión 
$('.close-user-session').on('click', function(){
    localStorage.clear();
    M.toast({html: 'Hasta luego', classes: 'blue rounded'});

    setTimeout( function(){
        window.location = 'index.php';
    }, 500 );
});


