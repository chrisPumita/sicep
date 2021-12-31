<?php
require_once "../config/APP.php";
require_once "./control/vistasControlador.php";
//Star with Role admin, student, teach

//Control SESSION dependiendo el rool en el que se logueo
session_start();
if(isset($_SESSION['usuario']))
{
    //Si ya existe una sesion reedirecciona a home
    $rol = $_SESSION['typeCount'];
    $plantilla = new vistasControlador();
    $plantilla->obtener_plantilla_controlador($rol);

}
else{
    header('Location: ../');
}
