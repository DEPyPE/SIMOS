<?php
    
    require_once("ConnectionDB.php");

    Class TemasClass{
        private $ConnectionDB;

        public function __construct(){
            $DBConnClass = new DatabaseConnectionClass();

            $this->ConnectionDB = $DBConnClass->OpenConnection();
        }

        public function Read_TemasByIdPP($Id){
            $Query = "SELECT * FROM Tema WHERE Tema.ID_ProgramaProyecto = ".$Id.";";
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

        public function Update_ValidateObservation($ID){
            $Query = "UPDATE Tema SET Observacion = '', ConObservacion = false, Estado = 'Observación validada', IconoEstado = 'assignment_turned_in' WHERE Tema.ID_Tema = ".$ID.";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $Data["Status"] = "Correct";
            else{
                $Data["Status"] = "Error";
            }

            return $Data;
        }

        public function Create_Tema($Data){
            $Query = "INSERT INTO Tema(ID_ProgramaProyecto, TituloDelTema, ContenidoDelTema, Observacion, ConObservacion, IconoEstado, Estado) VALUES(".$Data["ID"].", '".$Data["Titulo"]."', '".$Data["Contenido"]."', '', false, '', 'Sin observación');";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $Data["Status"] = "Correct";
            else{
                $Data["Status"] = "Error";
            }

            return $Data;
        }

        public function Update_TemaById($Data){
            $Query = "UPDATE Tema SET TituloDelTema = '".$Data["TituloDelTema"]."', ContenidoDelTema = '".$Data["ContenidoDelTema"]."' WHERE Tema.ID_Tema = ".$Data["ID_Tema"].";";
            $ResultSet = $this->ConnectionDB->query($Query);

            if( $ResultSet )
                $Data["Status"] = "Correct";
            else{
                $Data["Status"] = "Error";
            }

            return $Data;
        }

    }

?>
