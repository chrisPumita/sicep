<?php
if(isset($_POST['id'])){
    $id= 3;
    include_once "../control/controlGeneral.php";
    if(eliminaUnivesidad($id)){
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
    $mjeText="Error, faltan datos";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);
