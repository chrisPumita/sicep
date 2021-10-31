<?php

include_once "../control/controlCursos.php";
if (isset($_POST['filtro'])){
    $filtro = $_POST['filtro'];
    $data = consultaCursos($filtro,0);
//var_dump(json_encode($data));
//echo json_encode($data);

    echo json_encode([
        'data' => $data,
    ]);
}
