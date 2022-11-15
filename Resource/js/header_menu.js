
var UserData = JSON.parse( localStorage.getItem('UserData') );

$(function(){
    $('.dropdown-trigger').dropdown();
});

$('#dropdown-menu-sections li').on('click', 'a', function(){
    var section = $(this)[0].innerHTML;

    if( section == "Información general" || section == "Posicionamiento" ){
        $('.name-section').text( section );
    }else{
        $('.name-section').html( section + " (En construcción)" );
    }
    
    if( section == "Información general" ){
        $('#informacion_general').fadeIn(400);
        $('#posicionamiento').fadeOut(200);
        $('#plan_de_mejora').fadeOut(200);
        $('#formalizacion').fadeOut(200);
    }else if( section == "Posicionamiento" ){
        $('#informacion_general').fadeOut(200);
        $('#posicionamiento').fadeIn(400);
        $('#plan_de_mejora').fadeOut(200);
        $('#formalizacion').fadeOut(200);
    }else if( section == "Plan de mejora y monitoreo" ){
        $('#informacion_general').fadeOut(200);
        $('#posicionamiento').fadeOut(200);
        $('#plan_de_mejora').fadeIn(400);
        $('#formalizacion').fadeOut(200);
    }else if( section == "Formalización" ){
        $('#informacion_general').fadeOut(200);
        $('#posicionamiento').fadeOut(200);
        $('#plan_de_mejora').fadeOut(200);
        $('#formalizacion').fadeIn(400);
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


