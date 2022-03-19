<?php
if (isset($_POST['id'])){
    $id = $_POST['id'];
    include_once "../control/controlCursos.php";
    if (enviarPropuestaRevisa($id,0)){
        $mje = "Se ha enviado la propuesta";
        $type = 1;
    }
    else{
        $mje = "Error Interno";
        $type = -1;
    }
}
else{
    $mje = "No data ID recived";
    $type = 0;
}
$mje = array(
    "mjeType" => $type,
    "Mensaje" => $mje
);
echo json_encode($mje);