<?php

include_once "../control/controlCursos.php";
if (isset($_POST['filtro']) && isset($_POST['value'])){
    $filtro = $_POST['filtro'];
    $value = $_POST['value'];
    $data = consultaCursos($filtro,$value);
    //var_dump(json_encode($data));
    //echo json_encode($data);

    //Codifico para usar en DataTable
    echo json_encode([
        'data' => $data,
    ]);
}
