
<?php
    
    $ID = $_POST["ID"];
    $TypeData = $_POST["TypeData"];

    switch( $TypeData ){
        case "ProjectInfo":
            include("../Model/ProgramaProyectoModel.php");

            $Project = new ProgramaProyectoModelClass();
            $Data = $Project->Get_ProjectByIdUser($ID);

            echo json_encode( $Data );
            
            break;
        case "TechnicalInformationProject":
            include("../Model/FichaTecnicaProyectoModel.php");
            $FTProject = new FichaTecnicaProyectoClass();
            $Data = $FTProject->Get_FichaTecnicaByIdProject($ID);

            echo json_encode($Data);

            break;
        case "TechnicalInformationEvaluation":
            include("../Model/FichaTecnicaEvaluacionModel.php");
            $FTEvaluacion = new FichaTecnicaEvaluacionClass();
            $Data = $FTEvaluacion->Get_FichaTecnicaByIdProject($ID);

            echo json_encode($Data);

            break;
        case "OpinionGeneral":
            include("../Model/OpinionGeneralModel.php");
            $OpinionGeneral = new OpinionGeneralClass();
            $Data = $OpinionGeneral->Read_OpinionGeneralByIdProject($ID);

            echo json_encode($Data);
            
            break;
        case "Recomendaciones":
            include("../Model/RecomendacionesModel.php");
            $RecomendacionesClass = new RecomendacionesClass();
            $Data = $RecomendacionesClass->Get_RecomendationByIdProject($ID);

            echo json_encode($Data);
            break;
        case "DocumentosDelProyecto":
            include("../Model/DocumentosModel.php");
            $DocsClass = new DocumentosClass();
            $Data = $DocsClass->Get_DocumentsByIdProject($ID);

            echo json_encode( $Data );
            break;
        case "RecomendacionesPorDocumento":
            include("../Model/RecomendacionesDocumentosModel.php");
            $RecomDocs = new RecomendacionesDocumentosClass();
            $Data = $RecomDocs->Get_RecomendacionesByIdDocument($ID);

            echo json_encode( $Data );
            break;
    }

?>
