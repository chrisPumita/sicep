<?php
//ressibir la imagen con pOST
session_start();
$id = $_SESSION['typeCount'] == "admin" ? $_SESSION['idProfesor']  : $_SESSION['id_alumno'] ;
$tipo =  $_SESSION['typeCount'] == "admin" ? 1 : 0 ;

if ($tipo == 0){
    //toda la logica del profesor
    include_once "../control/controlProfesor.php";
    //actualizar
    $mensaje = "La imagen se ha modificado";
}
else{
    //Logica del alumno

    include_once "../control/controlAlum.php";
    $mensaje = "Tu imagen de perfil ha cambiado.";
}
echo json_encode(array(
    "Mje" => $mensaje
));
//regresar el mensaje en json_encode