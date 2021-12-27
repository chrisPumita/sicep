<?php
include_once "../control/controlAsignaciones.php";
if (isset($_POST['idCurso']) && isset($_POST['filtro']) && isset($_POST['idFiltro']))
{
    $idCurso = $_POST['idCurso'];
    $filtro = $_POST['filtro'];
    $idFiltro = $_POST['idFiltro'];
    $data = consultaAsignacionesHistoricasCurso($idCurso,$filtro,$idFiltro);
    echo json_encode([
        'data' => $data,
    ]);
}
else{
    echo json_encode([
        'data' => []
    ]);
}
