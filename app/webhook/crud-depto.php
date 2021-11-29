<?php
if (!isset($POST['id_depto']) && !isset($POST['nombre_depto']))
{
    $idDepto= $_POST["id_depto"];
    $nombreDepto = $_POST['nombre_depto'];
    if($idDepto>0)
        $mjeText ="Se va a Actualziar a " . $nombreDepto;
    else{
        $mjeText = "Registro ingresado";
    }
    $mje = array(
        "mjeType" => "1",
        "Mensaje" => $mjeText
    );
    echo json_encode($mje);
}
else{
    die;
}


