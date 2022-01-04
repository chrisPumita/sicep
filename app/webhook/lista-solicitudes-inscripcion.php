<?php
//solicitudes-inscripcion
$idInsc = $_POST['idInsc'];
if (isset($idInsc)){
    include_once "../control/controlInscripciones.php";
    $data = getListaPendientes($idInsc);
}
else{
    $data = array();
}

echo json_encode([
    'data' => $data
]);