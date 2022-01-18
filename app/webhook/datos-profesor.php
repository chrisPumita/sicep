<?php
session_start();
$idProfesor = $_SESSION['idProfesor'];
    include_once "../control/controlProfesor.php";
    $profes = consultaProfesores(0,$idProfesor);
    if(count($profes)>0){
        echo json_encode($profes);
    } else{
        $mjeType=0;
        $mjeText="No se han encontrado datos";
        $mje = array(
            "mjeType" => $mjeType,
            "Mensaje" => $mjeText
        );
        echo json_encode($mje);
    }
