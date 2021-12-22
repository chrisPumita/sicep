<?php
if (isset($_POST['id'])){
    $id = $_POST['id'];
    include_once "../control/controlArchivos.php";
    if (removeBanner($id)){
        $mje = "Se removio el Banner actual";
        $type = 1;
    }
    else{
        $mje = "Error Interno";
        $type = -1;
    }
}
else{
    $mje = "No data ID resived";
    $type = 0;
}
$mje = array(
    "mjeType" => $type,
    "Mensaje" => $mje
);
echo json_encode($mje);