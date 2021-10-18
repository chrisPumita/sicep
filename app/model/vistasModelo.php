<?php
/**
 * Modelo obtener las vistas que interactua con las vistas
 */
class vistaModelo
{
    /*--------------Modelos obtener vistas de ADMIN----------------*/
    protected static function obtener_vistas_modelo_admin($vistas)
    {
        #Lista blanca de palabras de la url
        $listaBlanca=["home","detalles-asignacion","detalles-curso","lista-cursos",
            "lista-profesores", "lista-alumnos", "lista-servicio-social",
        "detalles-profesor","nueva-asignacion",
            "detalles-asignacion", "lista-asignaciones",
            "ficha-insc", "lista-cuentas","nuevo-curso", "probar-modal", "detalles-alumno",
            "perfil-admin", "detalles-admin","general","ficha-inscripcion","lista-grupos"];
        #Verificamos si la vista que esta entrando esta en la lista blanca para poder moestrarla
        if (in_array($vistas,$listaBlanca))
        {
            if (is_file("./view/admin/".$vistas."-view.php"))
            {
                //buscamos la referencia del archivo y mostramos la vista
                $contenido = "./view/admin/".$vistas."-view.php";
            }
            else
            {
                //La referencia no existe asi que devolvemos 404
                $contenido="404";
            }
            # devolver la vista de la pagina
        }
        elseif ($vistas=="login"|| $vistas=="index") {
            # El usuario esta en el loging o index
            $contenido ="login";
        }
        else
        {
            $contenido="404";
        }
        return $contenido;
    }

    /*--------------Modelos obtener vistas de Aumno----------------*/

    protected static function obtener_vistas_modelo_alumno($vistas){
            #Lista blanca de palabras de la url de alumno
        $listaBlanca=["home","login","alumno-detcursos"];
        #Verificamos si la vista que esta entrando esta en la lista blanca para poder moestrarla
        if (in_array($vistas,$listaBlanca))
        {
            if (is_file("./view/alumno/".$vistas."-view.php"))
            {
                //buscamos la referencia del archivo y mostramos la vista
                $contenido = "./view/alumno/".$vistas."-view.php";
            }
            else
            {
                //La referencia no existe asi que devolvemos 404
                $contenido="404";
            }
            # devolver la vista de la pagina
        }
        elseif ($vistas=="login"|| $vistas=="index") {
            # El usuario esta en el loging o index
            $contenido ="login";
        }
        else
        {
            $contenido="404";
        }
        return $contenido;
    }

    /*--------------Modelos obtener vistas de Aumno----------------*/

    protected static function obtener_vistas_modelo_teacher($vistas){
        #Lista blanca de palabras de la url de alumno
        $listaBlanca=["home"];
        #Verificamos si la vista que esta entrando esta en la lista blanca para poder moestrarla
        if (in_array($vistas,$listaBlanca))
        {
            if (is_file("./view/profesor/".$vistas."-view.php"))
            {
                //buscamos la referencia del archivo y mostramos la vista
                $contenido = "./view/profesor/".$vistas."-view.php";
            }
            else
            {
                //La referencia no existe asi que devolvemos 404
                $contenido="404";
            }
            # devolver la vista de la pagina
        }
        elseif ($vistas=="login"|| $vistas=="index") {
            # El usuario esta en el loging o index
            $contenido ="login";
        }
        else
        {
            $contenido="404";
        }
        return $contenido;
    }


}