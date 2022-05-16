<?php
    
    include("ConnectionDB.php");

    Class FichaTecnicaProyectoClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_FichaTecnicaByIdProject( $IdProject ){
            $Query = "SELECT * FROM FichaTecnicaProyecto WHERE FichaTecnicaProyecto.ID_ProgramaProyecto=".$IdProject.";";
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

        public function Insert_ProjectInfoByIdProject( $Data ){
            $Query = "INSERT INTO FichaTecnicaProyecto(ID_ProgramaProyecto, NombreProyecto, ClaveProyecto, DependenciaDelProyecto, SiglasDependenciaProyecto, UnidadResponsable, SiglasUnidadResponsable, NombreResponsable, ValidacionInfo) VALUES(".$Data["ID_Project"].", '".$Data["NombreProyecto"]."', '".$Data["ClaveProyecto"]."', '".$Data["DependenciaDelProyecto"]."', '".$Data["SiglasDependenciaProyecto"]."', '".$Data["UnidadResponsable"]."', '".$Data["SiglasUnidadResponsable"]."', '".$Data["NombreResponsable"]."', false);";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Update_ProjectInfoByIdProject( $Data ){
            $Query = "UPDATE FichaTecnicaProyecto SET NombreProyecto = '".$Data["NombreProyecto"]."', ClaveProyecto = '".$Data["ClaveProyecto"]."', DependenciaDelProyecto = '".$Data["DependenciaDelProyecto"]."', SiglasDependenciaProyecto = '".$Data["SiglasDependenciaProyecto"]."', UnidadResponsable = '".$Data["UnidadResponsable"]."', SiglasUnidadResponsable = '".$Data["SiglasUnidadResponsable"]."', NombreResponsable = '".$Data["NombreResponsable"]."', ValidacionInfo = ".$Data["ValidacionInfo"]." WHERE ID_ProgramaProyecto = ".$Data["ID_Project"].";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

    }

?>
