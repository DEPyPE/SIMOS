<?php

    include("ConnectionDB.php");

    Class UsuarioModelClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_UserByEmail( $Email ){
            $Query = "SELECT * FROM Usuario WHERE Usuario.Correo = '".$Email."';";
            $ResultDB = $this->ConnectionDB->query($Query);

            if( $ResultDB->num_rows == 1 ){
                $Data = $ResultDB->fetch_assoc();
                $Data["Status"] = "Correct";
            }else if( $ResultDB->num_rows > 1 ){
                $Data["Status"] = "More users";
            }else if( $ResultDB->num_rows == 0 ){
                $Data["Status"] = "No registered";
            }else
                $Data["Status"] = "Error en la consulta";

            return $Data;
        }
    }

?>