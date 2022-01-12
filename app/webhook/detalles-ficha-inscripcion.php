<?php
if (isset($_POST['idInscipcion']))
{
    include_once "../control/controlInscripciones.php";
    $idInsc = $_POST['idInscipcion'];
    echo json_encode(getinfoInsc($idInsc));
}
else{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error"
    );
    echo json_encode($mje);
}
