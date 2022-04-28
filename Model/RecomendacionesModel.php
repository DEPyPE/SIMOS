
<?php
    
    include("ConnectionDB.php");

    Class RecomendacionesClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_RecomendationByIdProject( $IdProject ){
            $Query = "SELECT * FROM Recomendaciones WHERE Recomendaciones.ID_ProgramaProyecto='".$IdProject."';";
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

        public function Insert_RecomendacionByIdProject( $Rec ){
            $Query = "INSERT INTO Recomendaciones(ID_ProgramaProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, TipoActoresInvolucradosEnSolucion, NivelDePrioridad, AccionDeMejora, AreaResponsable, FechaCompromisoDeCumplimiento, ResultadosEsperados, EvidenciasSolicitadas, BanderaRecomendacionCompletada) VALUES(".$Rec["ID_Project"].", ".$Rec["IdentificadorRecomendacion"].", '".$Rec["AspectoSusceptibleDeMejora"]."', '".$Rec["TipoActoresInvolucradosEnSolucion"]."', '".$Rec["NivelDePrioridad"]."', '".$Rec["AccionDeMejora"]."', '".$Rec["AreaResponsable"]."', '".$Rec["FechaCompromisoDeCumplimiento"]."', '".$Rec["ResultadosEsperados"]."', '".$Rec["EvidenciasSolicitadas"]."', '".$Rec["BanderaRecomendacionCompletada"]."');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $Data["Status"] = "Correct";
            else
                $Data["Status"] = "Error";

            return $Data;            
        }

        public function Update_RecomendationByIdRecomendacion( $Data ){
            try{
                // 
                $Query = "UPDATE Recomendaciones SET IdentificadorRecomendacion = ".$Data["IdentificadorRecomendacion"].", AspectoSusceptibleDeMejora = '".$Data["AspectoSusceptibleDeMejora"]."', TipoActoresInvolucradosEnSolucion = '".$Data["TipoActoresInvolucradosEnSolucion"]."', NivelDePrioridad = '".$Data["NivelDePrioridad"]."', AccionDeMejora = '".$Data["AccionDeMejora"]."', AreaResponsable = '".$Data["AreaResponsable"]."', FechaCompromisoDeCumplimiento = '".$Data["FechaCompromisoDeCumplimiento"]."', ResultadosEsperados = '".$Data["ResultadosEsperados"]."', EvidenciasSolicitadas = '".$Data["EvidenciasSolicitadas"]."', BanderaRecomendacionCompletada = '".$Data["BanderaRecomendacionCompletada"]."'  WHERE IdentificadorRecomendacion = ".$Data["IdentificadorRecomendacion"].";";
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

        public function Delete_RecomendationByIdRecomendation( $Id ){
            try{
                $Query = "DELETE FROM Recomendaciones WHERE IdentificadorRecomendacion = ".$Id.";";
                $ResultSet = $this->ConnectionDB->query($Query);
    
                if( $ResultSet )
                    $Data["Status"] = "Correct";
                else
                    $Data["Status"] = "Error";
    
                return $Data;
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessages"] = $e->getMessage();

                return json_encode( $ResultErr );
            }
        }

    }

?>