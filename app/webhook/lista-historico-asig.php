<?php
include_once "../control/controlAsignaciones.php";
if (isset($_POST['filtro']) && isset($_POST['idFiltro']))
{
    $idCurso = 0;
    $filtro = $_POST['filtro'];
    $idFiltro = $_POST['idFiltro'];
    echo json_encode(consultaAsignacionesHistoricasCurso($idCurso,$filtro,$idFiltro));
}
else{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error"
    );
    echo json_encode($mje);
}
