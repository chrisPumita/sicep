<?php
include_once "../control/controlAsignaciones.php";
session_start();
echo json_encode(consultaAsigGeneralALumno($_SESSION['id_alumno']));