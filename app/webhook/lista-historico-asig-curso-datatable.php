<?php
include_once "../control/controlAsignaciones.php";
if (isset($_POST['idCurso']))
{
    $filtro = "";
    $idCurso = $_POST['idCurso'];
    $data = consultaAsignacionesHistoricasCurso($idCurso,$filtro);
    echo json_encode([
        'data' => $data,
    ]);
}
