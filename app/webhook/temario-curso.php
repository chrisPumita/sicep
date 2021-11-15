<?php
if (isset($_POST['idCurso'])){
    $idCurso = $_POST['idCurso'];
    include_once "../control/controlCursos.php";
    echo json_encode(consultaTemas($idCurso));
}
else{
    echo "no recibí datos";
}

