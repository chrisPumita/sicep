<?php
function cuentaRevisionCuentas(){
    include_once "../control/controlAlum.php";
    return countRevisionCuentas();
}

function cuentaSolicitudesPendientes(){
    include_once "../control/controlInscripciones.php";
    return countSolicitudesPendientes();
}

function cuentaCursosPendientesRevisar(){
    include_once "../control/controlCursos.php";
    return countCursosPendientesRevisar();
}

function cuentaDocsPendRev(){
    include_once "../control/controlDocumentos.php";
    return getCountArchivosRevisa();
}

function estadisticasInscripcionesHome(){
    include_once "../control/controlInscripciones.php";
    return getEstadisticaAnualInscripciones();
}