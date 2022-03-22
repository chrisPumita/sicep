<?php
include_once "../control/controlEstadisticas.php";
session_start();
$idProfesor = $_SESSION['idProfesor'];
echo json_encode(getDataDashboardProfesor($idProfesor));
