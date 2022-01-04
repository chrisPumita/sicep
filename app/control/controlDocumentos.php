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