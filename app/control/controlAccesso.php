<?php

function verificaCuentaUser($correo,$pw,$chkProf)
{
    if ($chkProf){
        include_once "controlProfesor.php";
        $datosProfesor = consultaCuentaProfesor($correo,md5($pw));
        if(count($datosProfesor) > 0 ){
            //creamos la sesion
            session_start();
            $_SESSION['no_trabajador']  = $datosProfesor[0]['no_trabajador'];
            $_SESSION['usuario']        = $datosProfesor[0]['nombre'];
            $_SESSION['apaterno']       = $datosProfesor[0]['app'];
            $_SESSION['amaterno']       = $datosProfesor[0]['apm'];
            $_SESSION['depto']          = $datosProfesor[0]['depto_name'];
            $_SESSION['cuenta']         = $datosProfesor[0]['flagAdmin'] == "1"?'ADMINISTRADOR':'PROFESOR';
            $_SESSION['admin']          = $datosProfesor[0]['flagAdmin'] == "1" ? true:false;
            $_SESSION['correo_user']    = $datosProfesor[0]['email'];
            $_SESSION['idPersona']      = $datosProfesor[0]['id_persona'];
            $_SESSION['idProfesor']     = $datosProfesor[0]['id_profesor'];
            $_SESSION['img_perfil']     = $datosProfesor[0]['img_perfil'];
            $_SESSION['nombre_completo']= $datosProfesor[0]['nombre_completo'];
            $_SESSION['typeCount']      = 'admin';

            //obtengo la info de admin si es administrador
            if ($_SESSION['admin']){
                $cardAdmin = consultaCuentaAdmin($datosProfesor[0]['id_profesor']);
                $_SESSION['cargo']    = $cardAdmin[0]['cargo'];
                $_SESSION['permisos']    = $cardAdmin[0]['permisos'];
                $_SESSION['edoAdminCount']    = $cardAdmin[0]['edoAdminCount'];
            }

        }
        return $datosProfesor;
    }
    else{
        //verificamos cuenta de alumno
        include_once "controlAlum.php";
        $datosAlumno = consultaCuentaAlumno($correo,md5($pw));
        if(count($datosAlumno) > 0 ){
            //creamos la sesion
            session_start();
            $_SESSION['id_persona']     = $datosAlumno[0]['id_persona'];
            $_SESSION['matricula']      = $datosAlumno[0]['matricula'];
            $_SESSION['usuario']        = $datosAlumno[0]['nombre'];
            $_SESSION['apaterno']       = $datosAlumno[0]['app'];
            $_SESSION['amaterno']       = $datosAlumno[0]['apm'];
            $_SESSION['correo_user']    = $datosAlumno[0]['email'];
            $_SESSION['tipo_procedencia']          = $datosAlumno[0]['tipo_procedencia'];

            $_SESSION['cuenta']         = $datosAlumno[0]['flagServSoc'] == "1"?'SERVICIO SOCIAL':'ALUMNO';
            $_SESSION['serv']          = $datosAlumno[0]['flagServSoc'] == "1" ? true:false;
            $_SESSION['id_alumno']     = $datosAlumno[0]['id_alumno'];
            $_SESSION['id_tipo_procedencia']     = $datosAlumno[0]['id_tipo_procedencia_fk'];

            $_SESSION['perfil_image']     = $datosAlumno[0]['perfil_image'];
            $_SESSION['nombre_completo']= $datosAlumno[0]['nombre_completo'];
            $_SESSION['typeCount']      = 'student';
            if ($_SESSION['serv']){
                //Cargamos los atributos del servicio social
            }
        }
        return $datosAlumno;
    }

}

function updatePassword($id,$email,$pwdAnterior,$pwdNueva,$typeAcces){
    if($typeAcces>0){
        include_once "controlProfesor.php";
        return cambiaContrasenia($id,$email,$pwdAnterior,$pwdNueva);
    } else {
        include_once "controlAlum.php";
        return updatePwdAlumn($id,$email,$pwdAnterior,$pwdNueva);
    }
    return false;
}

