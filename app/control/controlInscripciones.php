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