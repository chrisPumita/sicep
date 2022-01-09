<?php

function getListaAlumnosAsignacion($idAsig){
    include_once "../model/INSCRIPCION.php";
    $objInsc = new INSCRIPCION();
    $ListaSolicitudes = array(
        "SolicPend" =>   $objInsc-> consultaSolcitudInscripciones(1,$idAsig,false),
        "OficList" =>  $objInsc-> consultaSolcitudInscripciones(2,$idAsig,true)
    );
    return $ListaSolicitudes;
}

function countSolicitudesPendientes(){
    include_once "../model/INSCRIPCION.php";
    $objInsc = new INSCRIPCION();
    return $objInsc->queryCountSolcitudesPendientes();
}

function getListaPendientes($idInsc){
    include_once "../model/INSCRIPCION.php";
    $objInsc = new INSCRIPCION();
    $objInsc->setIdInscripcion($idInsc);
    return  $objInsc-> queryFichasInscripcion(false,true);
}

function getListaInscYFiles($idUniqueIns){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idUniqueIns);
    return $I->queryFichasInscripcion(true,false);
}

function getListaFilesPendientesInsc($idInscipcion,$filtro){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInscipcion);
    return $I->queryLsDocPendientesInscipcion($filtro);
}