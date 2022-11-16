
<?php
    $TypeData = $_POST["TypeData"];

    switch( $TypeData ){
        case "ProgramProjectInfo":
            $ID = $_POST["ID"];
            require_once("../Model/ProgramaProyectoModel.php");

            $ProjectClass = new ProgramaProyectoModelClass();
            $Data = $ProjectClass->Read_ProjectByIdUser($ID);

            echo json_encode( $Data );
            
            break;
        case "YearsOfProjects":
            $ID = $_POST["ID"];
            require_once("../Model/ProgramaProyectoModel.php");

            $ProjectClass = new ProgramaProyectoModelClass();
            $Years = $ProjectClass->Read_AllYearsOfProjectsRegistered($ID);

            echo json_encode( $Years );
            break;
        case "ProjectsByYear":
            $Year = $_POST["Year"];
            require_once("../Model/ProgramaProyectoModel.php");

            $ProjectClass = new ProgramaProyectoModelClass();
            $ProgramsProjects = $ProjectClass->Read_ProgramProjectByYear($Year);

            echo json_encode( $ProgramsProjects );
            break;
        case "CreateEvaluationInfo":
            $ID = $_POST["ID"];
            require_once("../Model/EvaluacionModel.php");

            $EvaluationClass = new EvaluacionModelClass();
            $DataEvaluation = $EvaluationClass->Read_EvaluationByIdProject($ID);

            echo json_encode( $DataEvaluation );
            
            break;
        case "ReadEvaluationInfo":
            $ID = $_POST["ID"];
            require_once("../Model/EvaluacionModel.php");

            $EvaluationClass = new EvaluacionModelClass();
            $DataEvaluation = $EvaluationClass->Read_EvaluationByIdProject($ID);

            echo json_encode( $DataEvaluation );

            break;
        case "OpinionGeneralInfo":
            $ID = $_POST["ID"];
            include("../Model/OpinionGeneralModel.php");
            $OpinionGeneral = new OpinionGeneralClass();
            $Data = $OpinionGeneral->Read_OpinionGeneralByIdProject($ID);

            echo json_encode($Data);
            
            break;
        case "ReadObservation":
                include("../Model/ObservationModel.php");

                $Data = $_POST["Data"];
                $ObservationClass = new ObservationClass();
                $ObservationResult = $ObservationClass->Read_ObservationById($Data);
    
                echo json_encode($ObservationResult);
                
            break;
        case "ComentarioYObservaciones":
                require_once("../Model/TemasModel.php");

                $ID = $_POST["ID"];
                $TemasClass = new TemasClass();
                $TemasResult = $TemasClass->Read_TemasByIdPP($ID);

                echo json_encode( $TemasResult );
            break;
    }

?>
