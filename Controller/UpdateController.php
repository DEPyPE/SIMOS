<?php 

    $TypeData = $_POST["TypeData"];

    switch($TypeData){

        case "UpdateEvaluationValidationStatus":
            try{
                $ID = $_POST["ID"];
                include('../Model/EvaluacionModel.php');
    
                $UpdateClass = new EvaluacionModelClass();
                $ResultSet = $UpdateClass->Update_ValidateEvaluationInformation( $ID );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "ValidatedProgramProjectInformation":
            try{
                $ID = $_POST["ID"];
                include('../Model/ProgramaProyectoModel.php');
    
                $UpdateClass = new ProgramaProyectoModelClass();
                $ResultSet = $UpdateClass->Update_InformationValidationStatus( $ID );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "ValidateInformationProgramProject":            
            try{
                $Data = $_POST["Data"];
                include('../Model/ProgramaProyectoModel.php');

                $UpdateClass = new ProgramaProyectoModelClass();
                $ResultSet = $UpdateClass->Update_ValidateInformationProgramProject( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "ValidateInformationEvaluation":
            try{
                $Data = $_POST["Data"];
                include('../Model/EvaluacionModel.php');

                $UpdateClass = new EvaluacionModelClass();
                $ResultSet = $UpdateClass->Update_ValidateInformationEvaluation( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateSendValidationGeneralOpinion":
            try{
                $Data = $_POST["Data"];
                include('../Model/OpinionGeneralModel.php');

                $UpdateClass = new OpinionGeneralClass();
                $ResultSet = $UpdateClass->Update_ValidateGeneralOpinion( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateAvanceProgramaProyecto":
            try{
                $Data = $_POST["Data"];
                include('../Model/ProgramaProyectoModel.php');

                $UpdateClass = new ProgramaProyectoModelClass();
                $ResultSet = $UpdateClass->Update_AvanceProgramaProyecto( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateDataEvaluation":
            try{
                $Data = $_POST["Data"];
                include('../Model/EvaluacionModel.php');

                $UpdateClass = new EvaluacionModelClass();
                $ResultSet = $UpdateClass->Update_Evaluacion( $Data );

                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateGeneralOpinion":
            try{
                $Data = $_POST["Data"];
                include('../Model/OpinionGeneralModel.php');

                $UpdateClass = new OpinionGeneralClass();
                $ResultSet = $UpdateClass->Update_GeneralOpinionByIdProject( $Data );
                
                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }
        break;
        case "UpdateOG_ValidationObservation":
            try{
                include('../Model/OpinionGeneralModel.php');

                $UpdateClass = new OpinionGeneralClass();
                $ResultSet = $UpdateClass->Update_ValidateObservation();
                
                echo json_encode( $ResultSet );
            }catch(Exception $e){
                $ResultErr["Status"] = "Error";
                $ResultErr["ServerMessage"] = $e->getMessage();

                echo json_encode( $ResultErr );
            }            
        break;
    }

    //, Etapa = 'Información general', SubEtapa = 'Ficha técnica de la evaluación validada'
    

?>



