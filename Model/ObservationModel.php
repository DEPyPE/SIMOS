<?php
    
    include("ConnectionDB.php");

    Class ObservationClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        /*
        public function Read_GeneralOpinionObservationById($Data){
            $Query = "SELECT * FROM Observacion WHERE Observacion.ID_ProgramaProyecto = ".$Data["ID_ProgramaProyecto"]." AND Observacion.ID_Seccion = ".$Data["ID"]." AND Seccion = '".$Data["Seccion"]."';";
            $ResultDB = $this->ConnectionDB->query($Query);

            if( $ResultDB->num_rows > 0 ){
                $Data = $ResultDB->fetch_assoc();
                $Data["Status"] = "Correct";
            }else if( $ResultDB->num_rows == 0 ){
                $Data["Status"] = "Empty";
            }else
                $Data["Status"] = "Error";

            return $Data;
        }
        */

        public function Read_ObservationById( $DataIn ){
            $Query = "SELECT * FROM Observacion WHERE ID_ProgramaProyecto = ".$DataIn["ID_ProgramaProyecto"]." AND ID_Seccion = ".$DataIn["ID_Seccion"]." AND Seccion = '".$DataIn["Seccion"]."';";
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

        public function Insert_OpinionGeneralByIdProject($Data){
            $Query = "INSERT INTO OpinionGeneral(ID_ProgramaProyecto, ID_Observacion, ComentariosGenerales, EstadoValidacion) VALUES(".$Data["ID_ProgramaProyecto"].", 0, '".$Data["ComentariosGenerales"]."', '".$Data["EstadoValidacion"]."');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }
    }

?>
