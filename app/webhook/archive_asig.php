<?php
if(isset($_POST['id'])){
    $id= $_POST['id'];
    include_once "../control/controlAsignaciones.php";
    if(archivarAsignacion($id)){
        $mjeType="1";
        $mjeText="Se ha Archivado con exito";
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
