<?php
if (isset($_POST['id'])){
    $id = $_POST['id'];
    include_once "../control/controlArchivos.php";
    if (removePdfCurso($id)){
        $mje = "Se removio el temario actual";
        $type = 1;
    }
    else{
        $mje = "Error Interno";
        $type = -1;
    }
}
else{
    $mje = "No data ID recived";
    $type = 0;
}
$mje = array(
    "mjeType" => $type,
    "Mensaje" => $mje
);
echo json_encode($mje);