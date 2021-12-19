<?php
include_once "../control/controlAsignaciones.php";
if (isset($_POST['idCurso']))
{
    $filtro = "";
    $idCurso = $_POST['idCurso'];
    $data = consultaAsignacionesHistoricasCurso($idCurso,0,0);
    echo json_encode([
        'data' => $data,
    ]);
}
