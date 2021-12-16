<?php
include_once "../control/controlAsignaciones.php";
if (isset($_POST['idCurso']))
{
    $idCurso = $_POST['idCurso'];
    $data = consultaAsignacionesHistoricasCurso($idCurso);
    echo json_encode([
        'data' => $data,
    ]);
}
