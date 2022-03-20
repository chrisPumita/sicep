<?php
include_once "../control/controlAsignaciones.php";
if (isset($_POST['idCurso']) && isset($_POST['filtro']) && isset($_POST['idFiltro']))
{
    $idCurso = $_POST['idCurso'];
    $filtro = $_POST['filtro'];
    $idFiltro = $_POST['idFiltro'];

    //Solo caso prfoesor no admin
    if($filtro==2){
        session_start();
        $idFiltro = $_SESSION['idProfesor'];
    }

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
