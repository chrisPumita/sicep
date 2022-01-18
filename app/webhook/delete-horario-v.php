<?php
if(isset($_POST['id'])){
    $idHorarioV= $_POST['id'];
    include_once "../control/controlCursos.php";
    if(deleteHorarioV($idHorarioV)){
        $mjeType="1";
        $mjeText="Se ha eliminado con exito.";
    }
    else {
        $mjeType="-1";
        $mjeText="Error interno.";
    }
    
}
else {
    $mjeType="0";
    $mjeText="Error, faltan datos.";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);
