<?php
if(isset($_POST['idCurso']) && isset($_POST['idProcedencia'])){
    $idCurso= $_POST['idCurso'];
    $idProcedencia= $_POST['idProcedencia'];
    include_once "../control/controlCursos.php";
    if(deleteDescuento($idCurso,$idProcedencia)){
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
