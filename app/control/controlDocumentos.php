<?php
 //DOCUMENTOS SOLICITADOS DEL CURSO

function getDocsSolCurso($idCurso){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $DS = new DOCS_SOLICITADOS_CURSO();
    $DS->setIdCursoFk($idCurso);
    return $DS->queryListaDocumentosSol();
}

//funcion OK
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

function deleteDocumentoSolicitado($idDocSol){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $DS = new DOCS_SOLICITADOS_CURSO();
    $DS->setIdDocSol($idDocSol);
    return $DS->queryEliminaDocumentoSolicitado();
}

/*****************************************************
 * DOCUMENTACION REVISADA ENVIADA POR EL ALUMNO ******
 *****************************************************/
/*
0. enviado para verificar (default)
1. verificado y aprobado
2. verificado y rechazado
3. incorrecto
4. falso
5. caducado
6. eliminado
*/
function procesaArchivoRecibido($idFile, $value, $pw){
    include_once "../model/ARCHIVO.php";
    $file = new ARCHIVO();
    $file->setIdArchivo($idFile);
    $file->setEstadoArchivo($value);
    $file->setEstadoRevision(1);
    $file->setNotas("CODE: ".$value."- Se reviso el documento.<br>");
    $obj = $file->queryValidaConfirmAdminPw();
    if ($obj){
        if ($obj[0]['obligatorio']==1){
            include_once "../control/controlAdmin.php";
            return  validacionAdminAccount($pw,3)
                ? $file->queryUpdateEstadoArchivo() : false;
        }
        else{
            return  $file->queryUpdateEstadoArchivo();
        }
    }
    else{
        return false;
    }
}
