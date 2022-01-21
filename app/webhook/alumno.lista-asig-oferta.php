<?php
include_once "../control/controlAsignaciones.php";
session_start();
echo json_encode(consultaOfertaAlumno($_SESSION['id_alumno']));