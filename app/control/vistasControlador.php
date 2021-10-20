<?php

//incluimos el modelo para que lo uise el controlador
////va a ser requerido una unica vez
require_once "./model/vistasModelo.php";

class vistasControlador extends vistaModelo
{
    /*------------- Controlador para obtener la plantilla -------------*/
    public function obtener_plantilla_controlador($rol)
    {
        # Mostramos la plantilla segun roll
        #//Star with Role admin, student, teach
        switch ($rol){
            case "admin":
                return require_once "./view/plantilla_admin.php";
            case "student":
                return require_once "./view/plantilla_student.php";
            case "teach":
                return require_once "./view/plantilla_teach.php";
        }

    }

    /*------------- Controlador para obtener la vistas -------------*/
    public function obtener_vistas_controlador_admin()
    {
        # views es el configurado en htaccess
        if(isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistaModelo::obtener_vistas_modelo_admin($ruta[0]);
        }
        else
        {
            #No viene definia la variable views
            $respuesta = "login";
        }
        return $respuesta;
    }

    /*------------- Controlador para obtener la vistas -------------*/
    public function obtener_vistas_controlador_student()
    {
        # views es el configurado en htaccess
        if(isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistaModelo::obtener_vistas_modelo_alumno($ruta[0]);
        }
        else
        {
            #No viene definia la variable views
            $respuesta = "login";
        }
        return $respuesta;
    }

    /*------------- Controlador para obtener la vistas -------------*/
    public function obtener_vistas_controlador_teach()
    {
        # views es el configurado en htaccess
        if(isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistaModelo::obtener_vistas_modelo_teacher($ruta[0]);
        }
        else
        {
            #No viene definia la variable views
            $respuesta = "login";
        }
        return $respuesta;
    }
}