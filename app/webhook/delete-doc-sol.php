<?php
if(isset($_POST['id'])){
    $id= $_POST['id'];
    include_once "../control/controlCursos.php";
    if(controlDeleteDocSol($id)){
        $mjeType="1";
        $mjeText="Se ha eliminado con éxito.";
    }
    else {
        $mjeType="-1";
        $mjeText="Error interno.";
    }
}
else {
    $mjeType="0";
    $mjeText="Error, el dato de documento no llego";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);
