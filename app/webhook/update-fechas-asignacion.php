<?php
//Update asignacion data
if( isset($_POST['idAsignacion'])&& isset($_POST['inicioCurso']) && isset($_POST['finCurso']) && isset($_POST['inicioInsc']) 
&& isset($_POST['finInsc']) && isset($_POST['inicioCal']) && isset($_POST['finCal'])){
    $params = [
        "idAsignacion"=>$_POST['idAsignacion'],
        "inicioCurso"=> $_POST['inicioCurso'],
        "finCurso"=> $_POST['finCurso'],
        "inicioInsc"=> $_POST['inicioInsc'],
        "finInsc"=> $_POST['finInsc'],
        "inicioCal"=> $_POST['inicioCal'],
        "finCal"=> $_POST['finCal']
    ];
    include_once "../control/controlAsignaciones.php";
    if(updateFechasAsignacion($params)){
        $mjeType=1;
        $mjeText="Se ha actualizado con exito.";
    } else {
        $mjeType=-1;
        $mjeText="Error Interno.";
    }

}else{
    $mjeType=0;
        $mjeText="Faltan datos.";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);