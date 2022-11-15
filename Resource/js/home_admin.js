
//var UserData = JSON.parse( localStorage.getItem('UserData') );

//  Agregamos la información del usuario al sub menú y el nombre de la sección
$('.name-user').text( "Cuenta de administrador"  );
$('.email-user').text( "admin@admin.com" );
$('.profile-user').text( "Administrador" );

$('.profile-user').css({
    'font-size': '28px',
    'margin-top': '40px'
});

//  Seleccionamos la sección de Información general y ocultamos las otras secciones
$('.name-section').text( "Usuarios registrados" );
$('#usuarios').hide();
$('#proyectos').fadeIn();

$(function(){
    $('.dropdown-trigger').dropdown();
    $('.tooltipped').tooltip();
    $('.modal').modal();
});

$('#dropdown-menu-sections li').on('click', 'a', function(){
    var section = $(this)[0].innerHTML;
    
    if( section == "Usuarios" ){
        $('#usuarios').fadeIn(400);
        $('#proyectos').fadeOut(200);
    }else if( section == "Proyectos" ){
        $('#usuarios').fadeOut(400);
        $('#proyectos').fadeIn(200);
    }
});

$('.btn-edit-user').on('click', function(){
    console.log('clicked');
});

$('.btn-add-user-info').on('click', function(){
    $('.btn-create-new-user').show();
    $('.btn-edit-data-user').hide();

    $('#txtNombre').val('');
    $('#txtApellidos').val('');
    $('#txtCorreo').val('');
    $('#txtPassword').val('');
    $('#selectPerfil').val('');
});

$('.btn-add-pp-info').on('click', function(){
    $('.btn-create-pp').show();
    $('.btn-edit-pp').hide();

    $('#txtClavePP').val('');
    $('#selectEjercicioFiscalPP').val('');
});

$('.btn-edit-pp-info').on('click', function(){
    $('.btn-create-pp').hide();
    $('.btn-edit-pp').show();

    var elem  = $(this).parent().parent();
    var clave = elem.find('.pp-clave')[0].innerHTML;
    var año = elem.find('.pp-year')[0].innerHTML;
    
    $('#txtClavePP').val(clave);
    $('#selectEjercicioFiscalPP').val(año);
});

$('.collection-users .collection-item').on('click', function(){
    $('.btn-create-new-user').hide();
    $('.btn-edit-data-user').show();

    var cname = $(this).find('.user-name-list')[0].innerHTML;
    var name_splited = cname.split(' ');
    var name = name_splited[0] + ' ' + name_splited[1];
    var last_names = name_splited[2] + ' ' + name_splited[3];

    $('#txtNombre').val( name );
    $('#txtApellidos').val( last_names );
    $('#txtCorreo').val( $(this).find('.user-email-list')[0].innerHTML );
    $('#txtPassword').val( "12345678910" );
    $('#selectPerfil').val( $(this).find('.user-profile-list')[0].innerHTML );

    $('#modal-add-edit-user').modal('open');
});

$('.collection-users .collection-item').on('mouseover', function(){
    $('.user-options-container').show();
});

$('.collection-users .collection-item').on('mouseout', function(){
    $('.user-options-container').hide();
});

// * * Eventos de la sesión 
$('.close-user-session').on('click', function(){
    localStorage.clear();
    M.toast({html: 'Hasta luego', classes: 'blue rounded'});

    setTimeout( function(){
        window.location = 'index.php';
    }, 500 );
});
