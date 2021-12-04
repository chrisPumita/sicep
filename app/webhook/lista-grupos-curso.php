<?php
if (isset($_POST['id_curso'])) {
    $idCurso = $_POST['id_curso'];
    include_once "../control/controlCursos.php";
    echo json_encode(consultaListaGrupos($idCurso));
} else
    die;
