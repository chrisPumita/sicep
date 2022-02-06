<?php
$idFile= $_POST['idFile'];
$folio= $_POST['folio'];
$idDocSol= $_POST['idDocSol'];
$nombreFILE1 = $_FILES['archivo']['name']; //Obteniendo el nombre1
$archivo1 = $_FILES['archivo']['tmp_name']; //OBteniendo el file1

if (isset($idFile) && isset($folio) && isset($idDocSol) && $_FILES['archivo']['name'] ) {
    include_once "../control/controlArchivos.php";

    if (procesaDocInscAlumno($archivo1,$nombreFILE1,$idFile,$folio)){
        $type = 1;
        $mensaje = "Subido un archivo ";
        $action = "success";
    }
    else{
        $type  =-1;
        $action = "error";
        $mensaje = "VALIDACION FALLIDA, PARAMETROS INCORRECTOS";
    }
}
else{
    $type = 0;
    $action = "info";
    $mensaje = "Porfavor seleccione un archivo valido y vuelva a internarlo nuevamente."."Subido un archivo ";
}
$resultados = array(
    "mensaje" => $mensaje,
    "type" => $type,
    "action" => $action
);
echo json_encode($resultados);