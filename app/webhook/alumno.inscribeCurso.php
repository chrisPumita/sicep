<?php
$idAsig = $_POST['idAsig'];
if (isset($idAsig)){
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    include_once "../control/controlInscripciones.php";
    $fichaGenerada = enviarSolicitudInscripcion($idAlumno,$idAsig);
    if ($fichaGenerada!=null){
        $mje = "Se ha enviado la solicitud de inscripción";
        $type = 1;
        $idGen = $fichaGenerada;
    }
    else{
        $mje = "No hemos podido enviar la solicitud";
        $type = -1;
        $idGen = null;
    }
}
else{
    $mje = "Error No se encontraron datos asociados";
    $type = 0;
}
$result = array(
    "messageText"=>$mje,
    "messageType"=>$type,
    "id"=>$idGen);
echo json_encode($result);