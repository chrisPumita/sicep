<?php

//Funcion de Lista Profesores LFHL
function consultaProfesores($filtro,$idProfesorUnique){
    include_once "../model/PROFESOR.php";
    $PROFESORES = new PROFESOR();
    return $PROFESORES->queryListaProfesoresAll($filtro,$idProfesorUnique);
}

//consulta la informacion de la cuenta de admin
function consultaCuentaAdmin($idProfesor){
    include_once "../model/PROFESOR.php";
    $PROF = new PROFESOR();
    $PROF->setIdProfesor($idProfesor);
    return $PROF->queryCardAdmin();
}

function consultaProfesoresDetails($filtro,$idProfesorUnique){
    $PROFES_DATA = consultaProfesores($filtro,$idProfesorUnique);
    $profes = [];
    foreach ($PROFES_DATA as $profe){
        $profeTmp = array("DatosProfe"=>$profe,"datosAdmin"=>[]);
        if (strcmp($profe['flagAdmin'], "1") === 0){
            $profeTmp["DatosAdmin"]=consultaCuentaAdmin($idProfesorUnique)[0];
        }
        array_push($profes,$profeTmp);
    }
    return $profes;
}

function consultaListaAutoresCurso(){
    include_once "../model/PROFESOR.php";
    $PROFESORES = new PROFESOR();
    $result = $PROFESORES->queryListaAutoresCurso();
    return $result;
}

function addProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESORES = new PROFESOR();
    $clave = date("YmdHis");
    //Creacion de la persona
    $PROFESORES->setIdPersona($clave);
    $PROFESORES->setNombre($params['nombre_profesor']);
    $PROFESORES->setApp($params['app']);
    $PROFESORES->setApm($params['apm']);
    $PROFESORES->setTelefono($params['telefono']);
    $PROFESORES->setSexo($params['sexo']);
    $PROFESORES->setEstatus(1);
    $PROFESORES->setIdDeptoFk($params['idDepto']);
    $PROFESORES->setNoTrabajador($params['no_trabajador']);
    $PROFESORES->setPrefijo($params['Prefijo']);
    $PROFESORES->setEmail($params['correo']);
    $PROFESORES->setPw(md5($params['pwd']));
    //Preguntar para que funciona
    $PROFESORES->setKeyHash(md5($params['keyHash']));
    $PROFESORES->setFechaRegistro(date('Y-m-d H:i:s'));

    $persona= $PROFESORES->queryInsertPersona();
    //Si la persona se creó, se crea el profesor sino, se regresa error
    if($persona){
        return $PROFESORES->queryInsertProfesor();
    }
    return false;
}
//LFHL


//RCSG
function consultaListaNoAdmin(){
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    return $obj_prof -> queryListProfesoresNoAdmin();
}

function consultaCuentaProfesor($email,$pwEncrypted){
    include_once "../model/PROFESOR.php";
    $PROF = new PROFESOR();
    $PROF->setEmail($email);
    $PROF->setPw($pwEncrypted);
    return $PROF->queryCountProfesor();
}

function cambiaContrasenia($idProfesor,$email,$pwAnterior,$pwdNew){
    $tmpProfe = consultaCuentaProfesor($email,md5($pwAnterior));
    if (count($tmpProfe)>0){
        include_once "../model/PROFESOR.php";
        $prof = new PROFESOR();
        $prof->setIdProfesor($idProfesor);
        $prof->setPw(md5($pwdNew));
        return $prof->queryUpdatePw();
    }
    else{
        return false;
    }
}


function actualizaPerfil($params){
    include_once "../model/PROFESOR.php";
    $PROF = new PROFESOR();
    //Seteamos todos los datos que se cambiaron
    //Datos de la persona 
    session_start();
    $PROF->setIdPersona($_SESSION['idPersona']);
    $PROF->setNombre($params['nombre']);
    $PROF->setApp($params['app']);
    $PROF->setApm($params['apm']);
    $PROF->setTelefono($params['telefono']);
    $PROF->setSexo($params['sexo']);
    //Datos del profesor
    $PROF->setIdProfesor($_SESSION['idProfesor']);
    $PROF->setIdDeptoFk($params['idDepartamento']);
    $PROF->setPrefijo($params['prefijo']);
    $PROF->setEmail($params['correo']);
    if($PROF->queryUpdatePersona()){
        //Si se actualiza la persona, se actualiza al profesor
        if($PROF->queryUpdateProfesor()){
            //Si se actualiza el profesor, actualizamos la session
            $_SESSION['usuario']= $PROF->getNombre();
            $_SESSION['apaterno']= $PROF->getApp();
            $_SESSION['amaterno']= $PROF->getApm();
            $_SESSION['correo_user']= $PROF->getEmail();
            $_SESSION['nombre_completo']= $PROF->getNombre()." ".$PROF->getApp()." ".$PROF->getApm();
            return true;
        }
    }
    return false;
}

function updateFotoProfesor($idProfesor,$path){
    include_once "../model/PROFESOR.php";
    $PROF = new PROFESOR();
    $PROF->setIdProfesor($idProfesor);
    $PROF->setImgPerfil($path);
    return $PROF->queryUpdateFotoProfesor();
}