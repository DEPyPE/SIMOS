<?php 

    $TypeData = $_POST["TypeData"];

    switch($TypeData){

        case "UpdateProjectInfo":
            try{
                $Data = $_POST["Data"];
                include('../Model/FichaTecnicaProyectoModel.php');
    
                $UpdateClass = new FichaTecnicaProyectoClass();
                $ResultSet = $UpdateClass->Update_ProjectInfoByIdProject( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateEvaluationInfo":
            try{
                $Data = $_POST["Data"];
                include('../Model/FichaTecnicaEvaluacionModel.php');
    
                $UpdateClass = new FichaTecnicaEvaluacionClass();
                $ResultSet = $UpdateClass->Update_EvaluationInfoByIdProject( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateGeneralComments":
            try{
                $Data = $_POST["Data"];
                include('../Model/OpinionGeneralModel.php');
    
                $UpdateClass = new OpinionGeneralClass();
                $ResultSet = $UpdateClass->Update_GeneralCommentsByIdProject( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
            break;
        case "UpdateSpecificComments":
            try{
                $Data = $_POST["Data"];
                include('../Model/OpinionGeneralModel.php');
    
                $UpdateClass = new OpinionGeneralClass();
                $ResultSet = $UpdateClass->Update_SpecificCommentsByIdProject( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
            break;
        case "UpdateRecomendaciones":
            try{
                $Data = $_POST["Data"];
                include('../Model/RecomendacionesModel.php');
    
                $UpdateClass = new RecomendacionesClass();
                $ResultSet = $UpdateClass->Update_RecomendationByIdRecomendacion( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
            break;
    }
    

?>



