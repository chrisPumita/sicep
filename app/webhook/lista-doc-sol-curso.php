<?php
if (isset($_POST['idCurso'])){
    include_once "../control/controlDocumentos.php";
    $idCurso = $_POST['idCurso'];
    echo json_encode(getDocsSolCurso($idCurso));
}
else {
    $mjeText="Posible Error de Backend";
    $mje = array(
        "mjeType" => -1,
        "Mensaje" => $mjeText
    );
    echo json_encode($mje);
}