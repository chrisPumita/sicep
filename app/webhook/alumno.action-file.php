<?php
if(isset($_POST['idAsig']) && isset($_POST['idFile']) && isset($_POST['idDocSol'])){
    $idAsig = $_POST['idAsig'];
    $idFile = $_POST['idFile'];
    $idDocSol = $_POST['idDocSol'];
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    include_once "../control/controlArchivos.php";

    if (cancelarEnvioFileAlumno($idAsig,$idFile,$idDocSol,$idAlumno)){
        $mje = "El documento ha sido eliminado ";
        $type = 1;
    }else{
        $mje = "Error de petición, los parametros son incorrectos.";
        $type = -1;
    }

}
else{
    $mje = "Información incompleta para procesar, no se resolvio la petición.";
    $type = 0;
}
$result = array(
    "messageText"=>$mje,
    "messageType"=>$type);

echo json_encode($result);