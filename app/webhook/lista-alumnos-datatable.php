<?php
include_once "../control/controlAlum.php";
if (isset($_POST['filtro'])){
    $filtro = $_POST['filtro'];
    $data = consultaListaAlumnos($filtro,0);
    echo json_encode([
        'data' => $data,
    ]);
}
