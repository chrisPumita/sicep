<?php
if (isset($_POST['idAsig'])){
    $id = $_POST['idAsig'];
    include_once "../control/controlInscripciones.php";
    $data = getListaAlumnosAsignacion($id);
    echo json_encode($data);
}
else{
    $mje = array(
        "mjeType" => -1,
        "Mensaje" => "Internal Error no se proceso el query de consulta de solicitudes"
    );
    echo json_encode($mje);
}
