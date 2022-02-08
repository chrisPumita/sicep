<?php
session_start();
    include_once "../control/controlAlum.php";
    $alumno = consultaListaAlumnos(-1,$_SESSION['id_alumno']);
    if(count($alumno)>0){
        echo json_encode($alumno[0]);
    } else{
        $mjeType=0;
        $mjeText="No se han encontrado datos";
        $mje = array(
            "mjeType" => $mjeType,
            "Mensaje" => $mjeText
        );
        echo json_encode($mje);
    }
