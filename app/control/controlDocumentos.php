<?php
 //DOCUMENTOS SOLICITADOS DEL CURSO

function getDocsSolCurso($idCurso){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $DS = new DOCS_SOLICITADOS_CURSO();
    $DS->setIdCursoFk($idCurso);
    return $DS->queryListaDocumentosSol();
}


function getCountArchivosRevisa(){
 include_once "../model/ARCHIVO.php";
 $ARCH = new ARCHIVO();
 return $ARCH->queryCountArchRevisa();
}

function addListaDocumentosSolicitados($idCurso,$listaDocSol){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $DS = new DOCS_SOLICITADOS_CURSO();
    $DS->setIdCursoFk($idCurso);
    return $DS->queryInsertLsDocsSol($listaDocSol);
}

function insertUpdateDocSol($params){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $DS = new DOCS_SOLICITADOS_CURSO();
    $DS->setIdDocSol($params['idDocSol']);
    $DS->setIdDocumentoFk($params['idDoc']);
    $DS->setIdCursoFk($params['idCurso']);
    $DS->setObligatorio($params['obligatorio']);
    return $params['idDocSol']>0 ? $DS->queryUpdateDocSolCurso() : $DS->queryInsertDocSolCurso();
}