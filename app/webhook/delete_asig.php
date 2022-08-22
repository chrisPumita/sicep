<?php
if(isset($_POST['id'])){
    $id= $_POST['id'];
    include_once "../control/controlAsignaciones.php";
    if(eliminarAsignacion($id)){
        $mjeType="1";
        $mjeText="Se ha eliminado el grupo";
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
