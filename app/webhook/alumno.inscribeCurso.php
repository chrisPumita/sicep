<?php
$idAsig = $_POST['idAsig'];
if (isset($idAsig)){
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    include_once "../control/controlInscripciones.php";
    if (enviarSolicitudInscripcion($idAlumno,$idAsig)){
        $mje = "Se ha enviado la solicitud de inscripción";
        $type = 1;
    }
    else{
        $mje = "No hemos podido enviar la solicitud";
        $type = -1;
    }
}
else{
    $mje = "Error No se encontraron datos asociados";
    $type = 0;
}
$result = array(
    "messageText"=>$mje,
    "messageType"=>$type);
echo json_encode($result);