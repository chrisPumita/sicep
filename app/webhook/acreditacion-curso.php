<?php
if (isset($_POST['idCurso'])){
    $idCurso = $_POST['idCurso'];
    include_once "../control/controlCursos.php";
    echo json_encode(consultaAcredita($idCurso));
}
else{
    echo "no recibí datos";
}
