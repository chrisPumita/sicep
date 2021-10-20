<?php
require_once "../config/APP.php";
require_once "./control/vistasControlador.php";
//Star with Role admin, student, teach

//Control SESSION dependiendo el rool en el que se logueo
$rol = "admin";
$plantilla = new vistasControlador();
$plantilla->obtener_plantilla_controlador($rol);