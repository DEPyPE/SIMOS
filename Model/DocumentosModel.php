<?php
    
    include("ConnectionDB.php");

    Class DocumentosClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Get_DocumentsByIdProject( $IdProject ){
            $Query = "SELECT * FROM DocumentoProyecto WHERE DocumentoProyecto.ID_ProgramaProyecto='".$IdProject."';";
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

        public function Insert_DocumentByIdProject( $Data ){
            $Query = "INSERT INTO DocumentoProyecto(ID_ProgramaProyecto, NombreDocumento, FormatoDocumento, URL_Documento, EstadoRevision) VALUES(".$Data["ID_ProgramaProyecto"].", '".$Data["NombreDocumento"]."', '".$Data["FormatoDocumento"]."', '".$Data["URL_Documento"]."', '".$Data["EstadoRevision"]."');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $DataOut["Status"] = "Correct";
            else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

        public function Delete_DocumentById($Data){
            $Query = "DELETE FROM DocumentoProyecto WHERE ID_DocumentoProyecto = ".$Data["ID_DocumentoProyecto"].";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet ){
                $Data["Status"] = "Correct";
                $NameFile = $Data["NombreDocumento"].".".$Data["FormatoDocumento"];
                $DirFile  = "../DocsUpload/".$NameFile;

                unlink($DirFile );
            }else
                $Data["Status"] = "Error";

            return $Data;
        }

        public function Update_DocumentoById($Data){
            $Query = "UPDATE DocumentoProyecto SET NombreDocumento = '".$Data["NuevoNombreDocumento"]."', EstadoRevision = '".$Data["EstadoRevision"]."' WHERE ID_DocumentoProyecto = ".$Data["ID_DocumentoProyecto"].";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet ){
                $OldName = $Data     ["NombreDocumento"].".".$Data["FormatoDocumento"];
                $NewName = $Data["NuevoNombreDocumento"].".".$Data["FormatoDocumento"];

                $DirOldName = "../DocsUpload/".$OldName;
                $DirNewName = "../DocsUpload/".$NewName;
                
                rename($DirOldName, $DirNewName);

                $DataOut["Status"] = "Correct";
            }else
                $DataOut["Status"] = "Error";

            return $DataOut;
        }

    }

?>