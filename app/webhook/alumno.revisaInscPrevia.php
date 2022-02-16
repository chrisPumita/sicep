<?php
$idAsig = $_POST['idAsig'];
if (isset($idAsig)){
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    include_once "../control/controlInscripciones.php";
    if (revisaInscipcionPrevia($idAsig,$idAlumno)>0){
        $mje = "Ya has enviado solicitud a este curso.";
        $option = false;

    }
    else{
        $mje = "Lea bien los terminos y condiciones para poder inscribirse a este curso";
        $option = true;
    }
}
else{
    $mje = "Error No se encontraron datos asociados";
    $type = null;
}
$result = array(
    "messageText"=>$mje,
    "option"=>$option);
echo json_encode($result);