
<?php
//  Obtenemos los datos del usuario por el método POST
    $User = $_POST["NameUser"];
    $Password = $_POST["Password"];

//  Incluimos e instanciamos la clase para realizar la conexión a la base de datos
    include("../Model/UsuarioModel.php");    
    $IndexClass = new UsuarioModelClass();

//  Buscamos en la BD el usuario mediante su correo
    $ResultDB = $IndexClass->Get_UserByEmail($User);
    
//  Realizamos el proceso de verificación de las credenciales del usuario
    $StatusQuery = $ResultDB["Status"];

    if( $StatusQuery == "Correct" ){
        $DB_Correo = $ResultDB["Correo"];
        $DB_Password = $ResultDB["Contraseña"];
        
        if( $User == $DB_Correo && $Password == $DB_Password ){
            $DataOut = $ResultDB;
            $DataOut["Status"] = "Correct";

            if( $ResultDB["TipoUsuario"] == "Capturista" ){
                $DataOut["URL"] = "home_epp.php";
            }

        }else
            $DataOut["Status"] = "Error";
    }else
        $DataOut["Status"] = "Error";

    echo json_encode( $DataOut );
?>
