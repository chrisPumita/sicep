<?php

if(isset($_POST['pwd']) && isset($_POST['pwdNew']) && isset($_POST['pwdNewConf'])){
    include_once "../model/mainModel.php";
    //ressibir PW ACTIUAL | PW NUEVO | CONFIRMA PW
    //IF QUE Compruebe que el PW nuevo y el PW confirma sean iguales
    $pwAnterior = $_POST['pwd'];
    $pwAnterior = mainModel::limpiar_cadena($pwAnterior);
    $pwNueva    = mainModel::limpiar_cadena($_POST['pwdNew']);
    $pwConfirm  = mainModel::limpiar_cadena($_POST['pwdNewConf']);
    if ($pwNueva == $pwConfirm){
        session_start();
        $correo = $_SESSION['correo_user'] ;
        $tipo =  $_SESSION['typeCount'] == "admin" ? 1 : 0 ;
        $id = $_SESSION['typeCount'] == "admin" ? $_SESSION['idProfesor']  : $_SESSION['id_alumno'] ;
    include_once "../control/controlAccesso.php";
        if(updatePassword($id,$correo,$pwAnterior,$pwNueva,$tipo)){
            $mjeType =1;
            $mjeText="Se ha actualizado con exito";
        } else {
            $mjeType =-1;
            $mjeText="La contraseña actual es incorrecta";
        }
    }
    else{
        $mjeType =0;
        $mjeText="Las contraseñas no coinciden.";
    }
}
else {
    $mjeType =0;
    $mjeText="Faltan datos.";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);
//regresar el mensa