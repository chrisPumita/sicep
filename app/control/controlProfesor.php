<?php

//Funcion de Lista Profesores LFHL
function consultaProfesores($filtro){
    include_once "../model/PROFESOR.php";
    $PROFESORES = new PROFESOR();
    $result = $PROFESORES->  ListaProfesoresA($filtro);
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
    $persona= $PROFESORES->queryInsertPersona();
    //Si la persona se creó, se crea el profesor sino, se regresa error
    if($persona){
        $PROFESORES->setIdPersona($params['idPersona']);
        $PROFESORES->setIdDeptoFk($params['idDepto']);
        $PROFESORES->setNoTrabajador($params['no_trabajador']);
        $PROFESORES->setPrefijo($params['Prefijo']);
        $PROFESORES->setEmail($params['correo']);
        $PROFESORES->setPw(md5($params['pwd']));
        //Preguntar para que funciona
        $PROFESORES->setKeyHash(md5($params['keyHash']));
        $PROFESORES->setFechaRegistro(date('Y-m-d H:i:s'));
        return $PROFESORES->queryInsertProfesor();
    }
    return false;
}
//LFHL