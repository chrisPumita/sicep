<?php
function consultaAsignacionGrupos($valorFiltro)
{
    include_once "../model/ASIGNACION_GRUPO.php";
    $ASIGNACION_GRUPO = new ASIGNACION_GRUPO();
    $result = $ASIGNACION_GRUPO->queryConsultaAsignacionGrupos($valorFiltro);
    return $result;
}

function consultaNumSolicitudesInscripcion($id_asignacion)
{
    include_once "../model/ASIGNACION_GRUPO.php";
    $ASIGNACION_GRUPO = new ASIGNACION_GRUPO();
    $result = $ASIGNACION_GRUPO->queryconsultaNumSolicitudesInscripcion($id_asignacion);
    return $result;
}

function ConsultaNumLugaresDisponibles($id_asignacion)
{
    include_once "../model/ASIGNACION_GRUPO.php";
    $ASIGNACION_GRUPO = new ASIGNACION_GRUPO();
    $result = $ASIGNACION_GRUPO->queryConsultaNumLugaresDisponibles($id_asignacion);
    return $result;
}