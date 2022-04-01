
<?php
    
    include("ConnectionDB.php");

    Class FichaTecnicaEvaluacionClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_FichaTecnicaByIdProject( $IdProject ){
            $Query = "SELECT * FROM FichaTecnicaEvaluacion WHERE FichaTecnicaEvaluacion.ID_ProgramaProyecto='".$IdProject."';";
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

        public function Insert_EvaluationInfoByIdProject( $Data ){
            $Query = "INSERT INTO FichaTecnicaEvaluacion(ID_ProgramaProyecto, InstanciaEvaluadora, NombreDeEvaluacion, TipoEvaluacion, AñoDeEvaluacion, NombreDelInforme, URL_Informe, CostoEvaluacion) VALUES(".$Data["ID_Project"].", '".$Data["InstanciaEvaluadora"]."', '".$Data["NombreDeEvaluacion"]."', '".$Data["TipoEvaluacion"]."', '".$Data["AñoDeEvaluacion"]."', '".$Data["NombreDelInforme"]."', '/docs/informe.pdf' ,'".$Data["CostoEvaluacion"]."');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $Data["Status"] = "Correct";
            else
                $Data["Status"] = "Error";

            return $Data;
        }

        public function Update_EvaluationInfoByIdProject( $Data ){
            try{
                $Query = "UPDATE FichaTecnicaEvaluacion SET InstanciaEvaluadora = '".$Data["InstanciaEvaluadora"]."', NombreDeEvaluacion = '".$Data["NombreDeEvaluacion"]."', TipoEvaluacion = '".$Data["TipoEvaluacion"]."', AñoDeEvaluacion = '".$Data["AñoDeEvaluacion"]."', NombreDelInforme = '".$Data["NombreDelInforme"]."', CostoEvaluacion = '".$Data["CostoEvaluacion"]."' WHERE ID_ProgramaProyecto = ".$Data["ID_Project"].";";
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
