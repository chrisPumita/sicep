<?php

//Funcion de Lista Profesores LFHL
function consultaProfesores($filtro){
    include_once "../model/PROFESOR.php";
    $PROFESORES = new PROFESOR();
    $result = $PROFESORES->queryListaProfesoresAll($filtro);
    return $result;
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
    //Creacion de la persona
    $PROFESORES->setNombre($params['nombre_profesor']);
    $PROFESORES->setApp($params['app']);
    $PROFESORES->setApm($params['apm']);
    $PROFESORES->setTelefono($params['telefono']);
    $PROFESORES->setSexo($params['sexo']);
    $PROFESORES->setEstatus(1);
    $PROFESORES->setIdPersona($params['idPersona']);
    $PROFESORES->setIdDeptoFk($params['idDepto']);
    $PROFESORES->setNoTrabajador($params['no_trabajador']);
    $PROFESORES->setPrefijo($params['Prefijo']);
    $PROFESORES->setEmail($params['correo']);
    $PROFESORES->setPw(md5($params['pwd']));
    $linkImg = "https://images.freeimages.com/images/premium/previews/4664/46645898-blue-profile-icon.jpg";
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