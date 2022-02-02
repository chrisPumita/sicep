<?php
$idSolicitud = $_POST['idSolicitud'];
if (isset($idSolicitud)){
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    include_once "../control/controlInscripciones.php";
    if (cancelarSolicitudAlumno($idAlumno,$idSolicitud)){
        $mje = "Se ha cancelado la Inscripción";
        $type = 1;
    }
    else{
        $mje = "El numero de solicitud no coincide con el alumno. Error de datos.";
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