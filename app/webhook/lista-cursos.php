<?php

include_once "../control/controlCursos.php";
if (isset($_POST['filtro'])&& isset($_POST['id_curso_filtro'])){
    $filtro = $_POST['filtro'];
    $idCurso = $_POST['id_curso_filtro'];
    echo json_encode(consultaCursos($filtro,$idCurso));
}
