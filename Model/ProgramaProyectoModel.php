<?php
    
    require_once("ConnectionDB.php");

    Class ProgramaProyectoModelClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Read_ProjectByIdUser( $IdUser ){
            $Query = "SELECT * FROM ProgramaProyecto WHERE ProgramaProyecto.ID_Usuario = '".$IdUser."';";
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

        public function Read_AllYearsOfProjectsRegistered($IdUser){
            $Query = "SELECT DISTINCT(EjercicioFiscal) FROM ProgramaProyecto ORDER BY EjercicioFiscal ASC";
            $ResultDB = $this->ConnectionDB->query($Query);

            if( $ResultDB->num_rows > 0 ){
                $count = 0;

                while( $row = $ResultDB->fetch_assoc() ){
                    $Data[$count] = $row["EjercicioFiscal"];

                    $count = $count + 1;
                }

                $Data["Status"] = "Correct";
                $Data["Length"] = $ResultDB->num_rows;
            }else if( $ResultDB->num_rows == 0 ){
                $Data["Status"] = "Empty";
            }else
                $Data["Status"] = "Error en la consulta";

            return $Data;
        }

        public function Read_ProgramProjectByYear($Year){
            $Query = "SELECT * FROM ProgramaProyecto WHERE ProgramaProyecto.EjercicioFiscal = '".$Year."';";
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
                $Data["Status"] = "Error en la consulta";

            return $Data;
        }

        public function Create_ProgramProjectDataByIdProject($Data){
            $Query = "UPDATE ProgramaProyecto SET Nombre='".$Data["NombreProyecto"]."', Clave = '".$Data["ClaveProyecto"]."', DependenciaResponsable = '".$Data["DependenciaProyecto"]."', SiglasDR = '".$Data["SiglasDependencia"]."', UnidadResponsable = '".$Data["UnidadResponsable"]."', SiglasUR = '".$Data["SiglasUnidadResponsable"]."', NombreResponsable = '".$Data["NombreResponsable"]."', EstadoValidacion = 'Información capturada' WHERE ID_ProgramaProyecto = '".$Data["ID_ProgramaProyecto"]."';";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else{
                $DataOut["Status"] = "Error";
                $DataOut["Error"]  = $ResultSet;
            }

            return $DataOut;
        }

        public function Update_InformationValidationStatus($ID){
            $Query = "UPDATE ProgramaProyecto SET EstadoValidacion = 'Enviada para validación', Etapa = 'Información general', SubEtapa = 'Información del proyecto enviada para validación' WHERE ID_ProgramaProyecto = ".$ID.";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else{
                $DataOut["Status"] = "Error";
            }

            return $DataOut;
        }

        public function Update_ValidateInformationProgramProject($Data){
            $NuevoAvance = intval($Data["PorcentajeAvance"]) + 5;
            $Query = "UPDATE ProgramaProyecto SET PorcentajeAvance = ".$NuevoAvance.", EstadoValidacion = 'Información validada', Etapa = 'Información general', SubEtapa = 'Ficha técnica del programa o proyecto validada' WHERE ID_ProgramaProyecto = ".$Data["ID_ProgramaProyecto"].";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else{
                $DataOut["Status"] = "Error";
            }

            return $DataOut;
        }

        public function Update_AvanceProgramaProyecto( $Data ){

            try{
                $Query = "UPDATE ProgramaProyecto SET Etapa = '".$Data["Etapa"]."', SubEtapa = '".$Data["SubEtapa"]."', PorcentajeAvance = '".$Data["PorcentajeAvance"]."' WHERE ID_ProgramaProyecto = ".$Data["ID_ProgramaProyecto"].";";
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

