<?php

include_once "../control/controlCursos.php";
if (isset($_POST['filtro'])){
    $filtro = $_POST['filtro'];
    echo json_encode(consultaCursos($filtro,0));
}
