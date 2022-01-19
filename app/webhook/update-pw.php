<?php
//ressibir PW ACTIUAL | PW NUEVO | CONFIRMA PW
//IF QUE Compruebe que el PW nuevo y el PW confirma sean iguales
$pwAnterior = "";
$pwNueva = "";
$pwConfirm = "";
if (1){
    session_start();
    $correo = $_SESSION['correo_user'] ;
    $tipo =  $_SESSION['typeCount'] == "admin" ? 1 : 0 ;
    $id = $_SESSION['typeCount'] == "admin" ? $_SESSION['idProfesor']  : $_SESSION['id_alumno'] ;
    if ($tipo == 0){
        //toda la logica del profesor
        include_once "../control/controlProfesor.php";
        if (cambiaContrasenia($id,$correo,$pwAnterior,$pwNueva)){
            $mensaje = "La imagen se ha modificado";
        }
        //actualizar
    }
    else{
        //Logica del alumno

        include_once "../control/controlAlum.php";
        $mensaje = "Tu imagen de perfil ha cambiado.";
    }
}
else{
    $mensaje =" contraseñas nmo coinciden";
}
echo json_encode(array(
    "Mje" => $mensaje
));
//regresar el mensa