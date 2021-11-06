<?php
include_once "../control/controlProfesor.php";
$filtro= $_POST['filtro'];
$data = consultaProfesores($filtro);
echo json_encode([
    'data' => $data,
]);
