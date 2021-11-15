<?php
/*Funcion para consultar todos los cursos LFHL*/
function consultaCursos($estado_filtro, $id_curso){
    include_once "../model/CURSO.php";
    $CURSO = new CURSO();
    $result = $CURSO->queryconsultaCursos($estado_filtro, $id_curso);
    return $result;
}
function addCurso($params){
    include_once "../model/CURSO.php";
    $CURSO= new CURSO();
    $CURSO->setIdCurso();
    $CURSO->setIdProfesorAdminAcredita();
    $CURSO->setIdProfesorAutor();
    $CURSO->setCodigo();
    
}
//LFHL
function consultaAcredita($idCurso){
    include_once "../model/CURSO.php";
    //return json_encode(CURSO::consultaAcredita($idCurso));
    $obj_curso= new CURSO();
    return $obj_curso->consultaAcreditacion($idCurso);
}

//COnsulta de temario de curso especifico
function consultaTemas($id_curso_fk)
{
    include_once "../model/CURSO.php";
    $temas = new TEMAS();
    return  $temas->consultaTemas($id_curso_fk);
}