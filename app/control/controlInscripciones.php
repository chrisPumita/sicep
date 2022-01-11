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

function getListaInscYFiles($idUniqueIns)
{
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idUniqueIns);
    return $I->queryFichasInscripcion(true, false);
}

//busca solo una inscripcion, por lo que tambien buscamos los la documentacion
function getinfoInsc($idInsc){
    include_once "../model/INSCRIPCION.php";
    include_once "controlServicioSocial.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInsc);
    $FichaValida = getValidaInscripcionDetails($idInsc);
    $DatosFicha = $I->queryFichasInscripcion(false,false)[0];
    $Documentos = getListaFilesPendientesInsc($idInsc,0);
    $I->setIdAlumnoFk($DatosFicha['id_alumno']);
    $cuentaSS = consultaCuentaServSoc($I->getIdAlumnoFk());
    $FichaDetails = array(
        "DATOS"=>$DatosFicha,
        "DOCS"=>$Documentos,
        "VALIDACION"=>count($FichaValida)>0 ? $FichaValida[0]:null,
        "C_SS"=>count($cuentaSS)>0 ? $cuentaSS[0]:null
    );
    return $FichaDetails;
}

function getListaFilesPendientesInsc($idInscipcion,$filtro){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInscipcion);
    return $I->queryLsDocPendientesInscipcion($filtro);
}

function getValidaInscripcionDetails($idInscipcion){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInscipcion);
    return $I->detallesValidacion();
}