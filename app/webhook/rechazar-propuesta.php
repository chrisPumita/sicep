<?php
if (isset($_POST['id'])){
    $id = $_POST['id'];
    include_once "../control/controlCursos.php";
    if (enviarPropuestaRevisa($id,-1)){
        $mje = "Se ha regresado el Curso al Autor para que vuelva a modificar";
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