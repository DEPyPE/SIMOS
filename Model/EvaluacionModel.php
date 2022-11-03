
<?php
    
    include("ConnectionDB.php");

    Class EvaluacionModelClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Read_EvaluationByIdProject( $ID ){
            $Query = "SELECT * FROM Evaluacion WHERE Evaluacion.ID_ProgramaProyecto = ".$ID.";";
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

        public function Insert_EvaluationInfoByIdProject( $Data ){
            /*
            ID_ProgramaProyecto, InstanciaEvaluadora, NombreDeLaEvaluacion, TipoDeEvaluacion, AñoDeEvaluacion, NombreDelInforme, CostoEvaluacion, ValidacionInfo
            */

            $Query = "INSERT INTO Evaluacion(ID_ProgramaProyecto, InstanciaEvaluadora, NombreDeLaEvaluacion, TipoDeEvaluacion, AñoDeEvaluacion, NombreDelInforme, CostoEvaluacion, EstadoValidacion, URL_Informe) VALUES(".$Data["ID_ProgramaProyecto"].", '".$Data["InstanciaEvaluadora"]."', '".$Data["NombeDeLaEvaluacion"]."', '".$Data["TipoDeEvaluacion"]."', ".$Data["AñoDeEvaluacion"].", '".$Data["NombreDelInforme"]."', ".$Data["CostoEvaluacion"].", 'Información capturada', '');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Update_Evaluacion( $Data ){

            try{
                $Query = "UPDATE Evaluacion SET InstanciaEvaluadora = '".$Data["InstanciaEvaluadora"]."', NombreDeLaEvaluacion = '".$Data["NombeDeLaEvaluacion"]."', TipoDeEvaluacion = '".$Data["TipoDeEvaluacion"]."', NombreDelInforme = '".$Data["NombreDelInforme"]."', AñoDeEvaluacion = '".$Data["AñoDeEvaluacion"]."', CostoEvaluacion = '".$Data["CostoEvaluacion"]."' WHERE ID_ProgramaProyecto = ".$Data["ID_ProgramaProyecto"].";";
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

        public function Update_ValidateEvaluationInformation($ID){
            $Query = "UPDATE Evaluacion SET EstadoValidacion = 'Enviada para validación' WHERE ID_ProgramaProyecto = ".$ID.";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else{
                $DataOut["Status"] = "Error";
            }

            return $DataOut;
        }

        public function Update_ValidateInformationEvaluation($ID){
            $Query = "UPDATE Evaluacion SET EstadoValidacion = 'Información validada' WHERE ID_ProgramaProyecto = ".$ID.";";
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
