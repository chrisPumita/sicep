<?php
$val = $_POST['val'];
$password = $_POST['password'];
$idFichaInsc = $_POST['id'];
if (isset($val)&&isset($password)) {
    include_once "../control/controlInscripciones.php";
    if (procesaInscripcionValidacion($password,$idFichaInsc,$val)){
        $action = true;
        $validation =true;
        $mensaje = "Se ha actualizado la solicitud ".$idFichaInsc;
    }
    else{
        $action = false;
        $validation =false;
        $mensaje = "VALIDACION FALLIDA, LA CONTRASEÑA ES INCORRECTA";
    }
}
else{
    $action = false;
    $validation =false;
    $mensaje = "NO LLEGARON DATOS";
}
$resultados = array(
    "mensaje" => $mensaje,
    "validacion" => $validation,
    "action" => $action
);
echo json_encode($resultados);