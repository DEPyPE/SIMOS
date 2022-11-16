<?php
    
    require_once("ConnectionDB.php");

    Class TemasClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Read_TemasByIdPP($Id){
            $Query = "SELECT * FROM Tema WHERE Tema.ID_ProgramaProyecto = ".$Id.";";
            $ResultDB = $this->ConnectionDB->query($Query);

            if( $ResultDB->num_rows > 0 ){
                $count = 0;

                while( $row = $ResultDB->fetch_assoc() ){
                    $Data[$count] = $row;

                    $count = $count + 1;
                }

                $Data["Status"] = "Correct";
                $Data["Length"] = $ResultDB->num_rows;
            }else if( $ResultDB->num_rows == 0 ){
                $Data["Status"] = "Empty";
            }else
                $Data["Status"] = "Error";

            return $Data;
        }

    }

?>
