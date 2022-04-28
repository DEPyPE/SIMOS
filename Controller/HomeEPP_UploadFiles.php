
<?php
    $Data["tmp_name"] = $_FILES["file"]["tmp_name"];
    $Data["complete_name"] = $_FILES['file']['name'];
    $Data["name"] = explode('.', $_FILES['file']['name'])[0];
    $Data["extension"] = explode('.', $_FILES['file']['name'])[1];

    if (move_uploaded_file($_FILES["file"]["tmp_name"], "../DocsUpload/".$_FILES['file']['name'] )) {
        $Result = "Correct";
    } else {
        $Result = "Error";
    }

    echo json_encode($Result);
?>
