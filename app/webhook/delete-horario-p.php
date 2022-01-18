<?php
if(isset($_POST['id'])){
    $idHorarioP= $_POST['id'];
    include_once "../control/controlCursos.php";
    if(deleteHorarioP($idHorarioP)){
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
