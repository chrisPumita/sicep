<?php
if (isset($_POST['idAsignacion'])&&isset($_POST['filtro'])){
    $id = $_POST['idAsignacion'];
    $filtro = $_POST['filtro'];
    include_once "../control/controlAsignaciones.php";
    $data = consultaAsignacionesHistoricasCurso(0,$filtro,$id);
    echo json_encode($data);
}
else{
    $mje = array(
        "mjeType" => -1,
        "Mensaje" => "Internal Error"
    );
    echo json_encode($mje);
}
