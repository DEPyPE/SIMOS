
<?php

    if( isset($_POST["TypeData"]) ){
        $TypeData = $_POST["TypeData"];
        
        switch( $TypeData ){
            case "InsertDataProgramProject":
                require_once('../Model/ProgramaProyectoModel.php');
                $Data = $_POST["Data"];
    
                $ProjInfClass = new ProgramaProyectoModelClass();
                $Resultset = $ProjInfClass->Create_ProgramProjectDataByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "InsertDataEvaluation":
                require_once('../Model/EvaluacionModel.php');
                $Data = $_POST["Data"];
    
                $ProjInfClass = new EvaluacionModelClass();
                $Resultset = $ProjInfClass->Insert_EvaluationInfoByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "CreateGeneralOpinion":
                require_once('../Model/OpinionGeneralModel.php');
                $Data = $_POST["Data"];
    
                $Insert = new OpinionGeneralClass();
                $Resultset = $Insert->Insert_OpinionGeneralByIdProject($Data);
    
                echo json_encode( $Resultset );
                break;
            case "CrearTema":
                require_once("../Model/TemasModel.php");

                $Data = $_POST["Data"];
                $TemasClass = new TemasClass();
                $TemasResult = $TemasClass->Create_Tema($Data);

                echo json_encode( $TemasResult );
                break;
        }
    }else{
        echo "Variable <<TypeData>> no definida";
    }

?>
