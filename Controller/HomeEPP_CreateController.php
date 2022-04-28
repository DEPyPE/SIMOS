
<?php

    if( isset($_POST["TypeData"]) ){
        $TypeData = $_POST["TypeData"];

        switch( $TypeData ){
            case "InsertProjectInfo":
                include('../Model/FichaTecnicaProyectoModel.php');
                $Data = $_POST["ProjectInfo"];
    
                $ProjInfClass = new FichaTecnicaProyectoClass();
                $Resultset = $ProjInfClass->Insert_ProjectInfoByIdProject($Data);
    
                echo json_encode( $Resultset );
                break; 
            case "InsertEvaluationInfo":
                include('../Model/FichaTecnicaEvaluacionModel.php');
                $Data = $_POST["EvalData"];
    
                $EvalInfClass = new FichaTecnicaEvaluacionClass();
                $Resultset = $EvalInfClass->Insert_EvaluationInfoByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "InsertOpinionGeneral":
                include('../Model/OpinionGeneralModel.php');
                $Data = $_POST["OpinionData"];
    
                $OpGenClass = new OpinionGeneralClass();
                $Resultset = $OpGenClass->Insert_OpinionGeneralByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "InsertRecomendacion":
                include('../Model/RecomendacionesModel.php');
                $Data = $_POST["Recomendacion"];
    
                $RecClass = new RecomendacionesClass();
                $Resultset = $RecClass->Insert_RecomendacionByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "UploadNewDocument":
                include('../Model/DocumentosModel.php');
                $Data = $_POST["DataDoc"];
    
                $DocsClass = new DocumentosClass();
                $Resultset = $DocsClass->Insert_DocumentByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "NewDocRecomendation":
                include('../Model/RecomendacionesDocumentosModel.php');
                $Data = $_POST["Data"];
    
                $DocsRecClass = new RecomendacionesDocumentosClass();
                $Resultset = $DocsRecClass->Insert_RecomendationByIdDocument($Data);
    
                echo json_encode( $Resultset );
                break;
        }
    }else{
        echo "Variable <<TypeData>> no definida";
    }

    



?>
