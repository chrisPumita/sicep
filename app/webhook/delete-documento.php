<?php
if(isset($_POST['id'])){
    $id= $_POST['id'];
    include_once "../control/controlGeneral.php";
    if(eliminaDocumento($id)){
        $mjeType="1";
        $mjeText="Se ha eliminado con exito";
    }
    else {
        $mjeType="-1";
        $mjeText="Error interno";
    }
}
else {
    $mjeType="0";
    $mjeText="Error,El dato de documento no llego";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);
