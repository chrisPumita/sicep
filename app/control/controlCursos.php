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
    $clave = date('YmdHiS');
    $CURSO->setIdCurso($clave);
    $CURSO->setIdProfesorAdminAcredita($params['idProfesorAdmin']);
    $CURSO->setIdProfesorAutor($params['idAutor']);
    $CURSO->setCodigo($params['codigo']);
    $CURSO->setNombrecCurso($params['nombre_curso']);
    $CURSO->setDirigidoA($params['dirigido']);
    $CURSO->setObjetivo($params['objetivo']);
    $CURSO->setDescripcion($params['descripcion']);
    $CURSO->setNoSesiones($params['noSesiones']);
    $CURSO->setAntecedentes($params['antecedentes']);
    $CURSO->setAprobado($params['aprobado']);
    $CURSO->setCostoSugerido($params['costo']);
    $CURSO->setLinkTemarioFk($params['linkTemario']);
    $CURSO->setFechaCreacion($params['fechaCreacion']);
    $CURSO->setFechaAcreditacion($params['fechaAcreditacion']);
    $CURSO->setBannerImg($params['banner']);
    $CURSO->setTipoCurso($params['tipoCurso']);
    return $CURSO->registraCurso();
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