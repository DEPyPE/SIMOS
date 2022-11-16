<?php
    
    include("ConnectionDB.php");

    Class OpinionGeneralClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Insert_OpinionGeneralByIdProject($Data){
            $Query = "INSERT INTO OpinionGeneral(ID_ProgramaProyecto, ComentariosGenerales, EstadoValidacion, ConObservacion, Descripcion, IconoEstado, Estado) VALUES(".$Data["ID_ProgramaProyecto"].", '".$Data["ComentariosGenerales"]."', '".$Data["EstadoValidacion"]."', false, '', '', '');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Read_OpinionGeneralByIdProject( $IdProject ){
            $Query = "SELECT * FROM OpinionGeneral WHERE OpinionGeneral.ID_ProgramaProyecto = ".$IdProject.";";
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

        public function Update_GeneralOpinionByIdProject( $Data ){

            try{
                $Query = "UPDATE OpinionGeneral SET ComentariosGenerales = '".$Data["ComentariosGenerales"]."' WHERE ID_ProgramaProyecto = '".$Data["ID_ProgramaProyecto"]."';";
                $ResultSet = $this->ConnectionDB->query($Query);
    
                if( $ResultSet )
                    $DataOut["Status"] = "Correct";
                else
                    $DataOut["Status"] = "Error";
    
                return $DataOut;
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessages"] = $e->getMessage();

                return json_encode( $ResultErr );
            }
        }

        public function Update_ValidateGeneralOpinion( $Data ){
            $Query = "UPDATE OpinionGeneral SET EstadoValidacion = '".$Data["EstadoValidacion"]."' WHERE ID_ProgramaProyecto = ".$Data["ID_ProgramaProyecto"].";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else{
                $DataOut["Status"] = "Error";
            }

            return $DataOut;
        }

        public function Update_ValidateObservation(){
            $Query = "UPDATE OpinionGeneral SET ConObservacion = false, Estado = 'Observación atendida';";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else{
                $DataOut["Status"] = "Error";
            }

            return $DataOut;
        }

    }

?>
