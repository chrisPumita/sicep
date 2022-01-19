<?php
session_start();
    include_once "../control/controlProfesor.php";
    $profe = consultaProfesores(0,$_SESSION['idProfesor']);
    if(count($profe)>0){
        echo json_encode($profe[0]);
    } else{
        $mjeType=0;
        $mjeText="No se han encontrado datos";
        $mje = array(
            "mjeType" => $mjeType,
            "Mensaje" => $mjeText
        );
        echo json_encode($mje);
    }
