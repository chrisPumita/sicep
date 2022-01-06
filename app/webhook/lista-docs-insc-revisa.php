<?php
if (isset($_POST['idFiltro']))
{
    include_once "../control/controlInscripciones.php";
    $idInsc = $_POST['idFiltro'];
    echo json_encode(getListaInscYFiles($idInsc));
}
else{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error"
    );
    echo json_encode($mje);
}
