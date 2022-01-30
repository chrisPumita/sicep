<?php
    include_once "../control/controlAsignaciones.php";
    include_once "../control/controlInscripciones.php";
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    $result = array("oferta"=> consultaOfertaAlumno($idAlumno),
        "misCursos"=>consultaFichaInscAlumno($idAlumno,0,1),
        "enviados"=>consultaFichaInscAlumno($idAlumno,0,0),
        "cancelados"=>consultaFichaInscAlumno($idAlumno,0,2));
    echo json_encode($result);