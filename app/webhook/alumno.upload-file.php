<?php
$idFile= $_POST['idFile'];
$folio= $_POST['folio'];
$idDocSol= $_POST['idDocSol'];
$nombreFILE1 = $_FILES['archivo']['name']; //Obteniendo el nombre1
$archivo1 = $_FILES['archivo']['tmp_name']; //OBteniendo el file1

if (isset($idFile) && isset($folio) && isset($idDocSol) && $_FILES['archivo']['name'] ) {
    include_once "../control/controlArchivos.php";
    session_start();
    $idALumno = $_SESSION['id_alumno'];
    $datos = "idFIle ".$idFile." insc ".$folio." idDocSol ".$idDocSol." alumno: ".$idALumno;
    if (procesaDocInscAlumno($archivo1,$nombreFILE1,$idFile,$folio,$idDocSol,$idALumno)){
        $type = 1;
        $mensaje = "Se ha enviado un archivo a revisión.";
        $action = "success";
    }
    else{
        $type  =-1;
        $action = "error";
        $mensaje = "VALIDACION FALLIDA, PARAMETROS INCORRECTOS". $datos;
    }
}
else{
    $type = 0;
    $action = "info";
    $mensaje = "Porfavor seleccione un archivo valido y vuelva a internarlo nuevamente. ";
}
$resultados = array(
    "mensaje" => $mensaje,
    "type" => $type,
    "action" => $action
);
echo json_encode($resultados);