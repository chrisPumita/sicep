<?php
#Enviar datos mediante Ajax
$peticionAjax = false;
require_once "./control/vistasControlador.php";
#Definimos una nueva instancia de vista
$IV = new vistasControlador();
#Nombre de la vista que se va a mostyrar
$vistas =  $IV->obtener_vistas_controlador_student();
#verificamos si es un login o 404
if ($vistas=="login"||$vistas=="404")
{
    #Mostramos la vistas
    require_once "./view/alumno/".$vistas."-view.php";
}
else {
    include $vistas;
}