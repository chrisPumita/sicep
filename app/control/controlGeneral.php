<?php
function getListaDepartamentos(){
    include_once "../model/DEPTO.php";
    $DEPTO = new DEPTO();
    return $DEPTO->queryListaDepartamentos();
}

function getListaUniversidades(){
    include_once "../model/UNIVERSIDADES.php";
    $UNI = new UNIVERSIDADES();
    return $UNI->queryListaUniversidades();
}

function getListaAulas($filtro, $tipo){
    include_once "../model/AULAS.php";
    $AULA = new AULAS();
    return $AULA->listaAulas($filtro, $tipo);
}

function getListaDocumentos(){
    include_once "../model/DOCUMENTO.php";
    $DOC = new DOCUMENTO();
    return $DOC->consultaDocumentos();
}