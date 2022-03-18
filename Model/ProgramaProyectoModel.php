<?php
    
    include("ConnectionDB.php");

    Class ProgramaProyectoModelClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_ProjectByIdUser( $IdUser ){
            $Query = "SELECT * FROM ProgramaProyecto WHERE ProgramaProyecto.ID_Usuario='".$IdUser."';";
            $ResultDB = $this->ConnectionDB->query($Query);

            if( $ResultDB->num_rows > 0 ){
                $Data = $ResultDB->fetch_assoc();
                $Data["Status"] = "Correct";
            }else
                $Data["Status"] = "Error en la consulta";

            return $Data;
        }

    }

?>