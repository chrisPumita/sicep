<?php

/* NO IMPEMENTADO*/
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

function consultaAsignacionesHistoricasCurso($idCurso,$filtro,$idFiltro){
    include_once "../model/ASIGNACION_GRUPO.php";
    $ASIGNACION_GRUPO = new ASIGNACION_GRUPO();
    return $ASIGNACION_GRUPO->queryHistorialAsignacionesCurso($idCurso,$filtro,$idFiltro);
}
/* NO IMPEMENTADO*/


function insertAsignacion($params){
    include_once "../model/ASIGNACION_GRUPO.php";
    $ASIG = new ASIGNACION_GRUPO();
    $publico = $params['publico']? 1:0;
    $ASIG->setIdGrupoFk($params['grupos']);
    $ASIG->setIdProfesorFK($params['profesorAsig']);
    $ASIG->setGeneracion($params['generacion']);
    $ASIG->setSemestre($params['semestre']);
    $ASIG->setCampusCede($params['campus']);
    $ASIG->setFechaInicio($params['InicioCurso']);
    $ASIG->setFechaFin($params['finCurso']);
    $ASIG->setFechaInicioInscripcion($params['inicioInsc']);
    $ASIG->setFechaLimInscripcion($params['finInsc']);
    $ASIG->setFechaInicioActas($params['inicioCal']);
    $ASIG->setFechaFinActas($params['finCal']);
    $ASIG->setCupo($params['numCupo']);
    $ASIG->setCostoReal($params['costo']);
    $ASIG->setNotas($params['notas']);
    $ASIG->setModalidad($params['modalidad']);
    $ASIG->setPublico($publico);
    return $ASIG->queryInsertAsignacion();
}

function getListaFilstrosAsig(){
    include_once "../model/ASIGNACION_GRUPO.php";
    $GEN = new ASIGNACION_GRUPO();
    return array(
        "generaciones" => $GEN->queryDistingGeneraciones(),
        "semestres"=> $GEN->queryDistingSemestres()
    );
}

//*************************
/// FUNCIONES ALUMNOS
//*************************

//Regresa una lista de asignaciones que el alumno puede enviar solicitud
function consultaOfertaAlumno($idAlumno){
    include_once "../model/ASIGNACION_GRUPO.php";
    $ASI = new ASIGNACION_GRUPO();
    return $ASI->queryAsignacionesAlumno(1,$idAlumno);
}
