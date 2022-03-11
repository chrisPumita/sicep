<?php

if(isset($_POST['nombre_alumno']) && isset($_POST['app_alumno']) && isset($_POST['apm_alumno']) 
&& isset($_POST['telefono_alumno']) && isset($_POST['sexo_alumno']) && isset($_POST['idMunicipio']) 
&& isset($_POST['idProcedencia']) && isset($_POST['carreraEspecialidad']) && isset($_POST['email_alumno'])){
    
    include_once "../model/mainModel.php";

    $params = [
        "nombre"=> mainModel::limpiar_cadena($_POST['nombre_alumno']),
        "app"=> mainModel::limpiar_cadena($_POST['app_alumno']),
        "apm"=> mainModel::limpiar_cadena($_POST['apm_alumno']),
        "telefono"=> mainModel::limpiar_cadena($_POST['telefono_alumno']),
        "sexo"=> $_POST['sexo_alumno'],
        "idMunicipio"=> $_POST['idMunicipio'],
        "idProcedencia"=> $_POST['idProcedencia'],
        "carreraEsp"=> mainModel::limpiar_cadena($_POST['carreraEspecialidad']),
        "email"=> mainModel::limpiar_cadena($_POST['email_alumno']),
        "universidad"=>mainModel::limpiar_cadena($_POST['universidad']),
        "nombreUni"=>mainModel::limpiar_cadena($_POST['nombreUni']),
        "idUni"
    ];
    include_once "../control/controlAlum.php";
    if(updateAlumno($params)){
        $mjeType = 1;
        $mjeText="Se ha actualizado con exito.";
    } else {
        $mjeType = -1;
        $mjeText="Error interno.";
    }
} else {
    $mjeType=0;
    $mjeText="Faltan datos";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);
