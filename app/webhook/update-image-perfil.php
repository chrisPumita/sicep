<?php
if($_FILES['imgPerfil']['name'] && $_FILES['imgPerfil']['tmp_name']){
    //Recibir imagen con type FILES
    session_start();
    $id = $_SESSION['typeCount'] == "admin" ? $_SESSION['idProfesor']  : $_SESSION['id_alumno'] ;
    //Si es 1 es admin por lo cual es profesor, si es 0, es alumno 
    $typeAccess =  $_SESSION['typeCount'] == "admin" ? 1 : 0 ;
    $nombreImg = $_FILES['imgPerfil']['name'];
    $imgFile = $_FILES['imgPerfil']['tmp_name'];
    include_once "../control/controlArchivos.php";
    if(updateFotoPerfil($id,$nombreImg,$imgFile,$typeAccess)){
        $mjeType=1;
        $mjeText="Se ha actualizado con éxito.";
    } else{
        $mjeType=-1;
        $mjeText="Error Interno";
    }
} else{
    $mjeType=0;
        $mjeText="Faltan datos";
}

//Regresamos mensjae en json_encode
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);