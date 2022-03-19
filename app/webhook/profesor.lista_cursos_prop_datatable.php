<?php
include_once "../control/controlCursos.php";
session_start();
$data = consultaCursos(2,$_SESSION['idProfesor']);
echo json_encode([
    'data' => $data,
]);