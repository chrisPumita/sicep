<?php
if (isset($_POST['idInscipcion'])&& isset($_POST['filtro']))
{
    include_once "../control/controlInscripciones.php";
    $idInsc = $_POST['idInscipcion'];
    $filtro = $_POST['filtro'] == "1"?true:false;
    echo json_encode(consultaDocumentacionAlumno($idInsc,$filtro));
}
else{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error"
    );
    echo json_encode($mje);
}
