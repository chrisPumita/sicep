<?php
#E S T A D I S T I C A S     S I D E B A R  A D M I N
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

#E S T A D I S T I C A S     D A S H B O A R D
function getDataDashboard(){
    include_once "../model/ESTADISTICAS.php";
    $ES = new  ESTADISTICAS();
    $resultados = array(
        "countCursos" => $ES->queryCuentaCursosActivos(),
        "countAlumnos" => $ES->cuentaAlumnosVerificados(),
        "countSolic" => cuentaSolicitudesPendientes(),
        "countConstancias" => $ES->queryCuentaConstancias(),
        "countRegistros" => $ES->queryEstadisticasAnioSolicitudes(),
        "countsPanels" => $ES->numericDashbiard(),
        "conteoHM" => $ES->queryConteoHM()
    );
    return $resultados;
}
