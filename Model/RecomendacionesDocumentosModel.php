<?php
    
    include("ConnectionDB.php");

    Class RecomendacionesDocumentosClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_RecomendacionesByIdDocument( $IdDoc ){
            $Query = "SELECT * FROM RecomendacionDocumento WHERE RecomendacionDocumento.ID_DocumentoProyecto='".$IdDoc."';";
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
                $Data["Status"] = "Sin resultados";
            }else
                $Data["Status"] = "Error en la consulta";

            return $Data;
        }

        public function Insert_RecomendationByIdDocument($Data){
            $Query = "INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada) VALUES(".$Data["ID_DocumentoProyecto"].", '".$Data["IdentificadorRecomendacion"]."', '".$Data["AspectoSusceptibleDeMejora"]."', ".$Data["BanderaRecomendacionCompletada"].");";
            $ResultSet = $this->ConnectionDB->query($Query);
            
            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Delete_DocRecomendationById( $IdDocRec ){
            $Query = "DELETE FROM RecomendacionDocumento WHERE ID_RecomendacionDocumento = ".$IdDocRec.";";
            $ResultSet = $this->ConnectionDB->query($Query);
            
            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Update_DocRecomendacionById( $Data ){
            $Query = "UPDATE RecomendacionDocumento SET AspectoSusceptibleDeMejora = '".$Data["AspectoSusceptibleDeMejora"]."', BanderaRecomendacionCompletada = ".$Data["BanderaRecomendacionCompletada"]." WHERE ID_RecomendacionDocumento = ".$Data["ID_RecomendacionDocumento"].";";
            $ResultSet = $this->ConnectionDB->query($Query);
            
            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

    }

?>