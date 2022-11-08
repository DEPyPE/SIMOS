
$(function(){
    $('.collapsible').collapsible();
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    $('.modal').modal();
    $(".dropdown-trigger").dropdown();
    $('.slider').slider();
    $('select').formSelect();

    console.log( 'Init SIMOS' );
});

$('.btn-login-simos').on('click', function(){
    var user = $('#txt_user').val();
    var pass = $('#txt_password').val();

    $.post("Controller/IndexController.php", {NameUser: user, Password: pass}, function( Response ) {
        var UserData = JSON.parse( Response );
        console.log( UserData );

        if( UserData.Status == "Correct" ){
            delete UserData.Contraseña;
            localStorage.setItem("UserData", JSON.stringify(UserData) );
            
            M.toast({html: '¡Bienvenido!', classes: 'green rounded'});

            setTimeout( function(){
                window.location = UserData.URL;
            }, 1000 );

        }else if( UserData.Status == "More users" ){
            M.toast({html: 'Hay más de un usuario registrado <br> con el mismo correo', classes: 'red lighten-1 rounded center-align'});
        }else{
            M.toast({html: 'Correo o contraseña incorrectos', classes: 'red rounded'});
        }
    });
});

