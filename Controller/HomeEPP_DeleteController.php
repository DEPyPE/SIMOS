<?php 

    $TypeData = $_POST["TypeData"];

    switch($TypeData){

        case "DelRec":
            try{
                $ID_DelRecomendation = $_POST["idRec"];
                include('../Model/RecomendacionesModel.php');
    
                $UpdateClass = new RecomendacionesClass();
                $ResultSet = $UpdateClass->Delete_RecomendationByIdRecomendation( $ID_DelRecomendation );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "DelDoc":
            try{
                $DataDoc = $_POST["Data"];
                include('../Model/DocumentosModel.php');
    
                $DocsClass = new DocumentosClass();
                $ResultSet = $DocsClass->Delete_DocumentById( $DataDoc );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "DelDocRec":
            try{
                $IdDocRec = $_POST["ID_DocRec"];
                include('../Model/RecomendacionesDocumentosModel.php');
    
                $DocsClass = new RecomendacionesDocumentosClass();
                $ResultSet = $DocsClass->Delete_DocRecomendationById( $IdDocRec );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
    }
    

?>



