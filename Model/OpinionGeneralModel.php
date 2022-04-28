<?php
    
    include("ConnectionDB.php");

    Class OpinionGeneralClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Read_OpinionGeneralByIdProject( $IdProject ){
            $Query = "SELECT * FROM OpinionGeneral WHERE OpinionGeneral.ID_ProgramaProyecto='".$IdProject."';";
            $ResultDB = $this->ConnectionDB->query($Query);

            if( $ResultDB->num_rows > 0 ){
                $Data = $ResultDB->fetch_assoc();
                $Data["Status"] = "Correct";
            }else if( $ResultDB->num_rows == 0 ){
                $Data["Status"] = "Sin resultados";
            }else
                $Data["Status"] = "Error en la consulta";

            return $Data;
        }

        public function Insert_OpinionGeneralByIdProject($Data){
            $Query = "INSERT INTO OpinionGeneral(ID_ProgramaProyecto, ComentariosObservacionesGenerales, ComentariosObservacionesPorTema) VALUES(".$Data["ID_Project"].", '".$Data["ComentariosObservacionesGenerales"]."', '".$Data["ComentariosObservacionesPorTema"]."');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Update_GeneralCommentsByIdProject( $Data ){
            try{
                $Query = "UPDATE OpinionGeneral SET ComentariosObservacionesGenerales = '".$Data["ComentariosObservacionesGenerales"]."' WHERE ID_ProgramaProyecto = ".$Data["ID_Project"].";";
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

        public function Update_SpecificCommentsByIdProject( $Data ){
            try{
                $Query = "UPDATE OpinionGeneral SET ComentariosObservacionesPorTema = '".$Data["ComentariosObservacionesPorTema"]."' WHERE ID_ProgramaProyecto = ".$Data["ID_Project"].";";
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



    }

?>
