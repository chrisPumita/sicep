<?php

if (isset($_POST['id']) && isset($_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];

    include_once "../control/controlAlum.php";

    $value = $action == "delete" ? eliminarAlumno($id) : activarAlumno($id);
    // ? "Se confirmó la cuenta del alumno" : "No se pudo confirmar la cuenta"
    if (true) {
        $mjeType = "1";
        $mjeText = "Se ha ". ($action == "delete" ? " ELIMINADO": "CONFIRMADO"). " la cuenta";
    } else {
        $mjeType = "-1";
        $mjeText = "No se puede realizar la acción, el alumno ya tiene registros de inscripción.";
    }
} else {
    $mjeType = "0";
    $mjeText = "Error, faltan datos";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);