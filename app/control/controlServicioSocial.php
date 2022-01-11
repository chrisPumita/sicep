<?php

function consultaCuentaServSoc($idAlumno){
    include_once "../model/SERVICIO_SOCIAL.php";
    $SS = new SERVICIO_SOCIAL();
    $SS->setIdAlumno($idAlumno);
    return $SS->queryConsultaFichaCuentaServSoc();
}