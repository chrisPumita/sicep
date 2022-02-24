<?php

if (isset($_POST['idFile']) && isset($_POST['value'])) {
    $pw = isset($_POST['pw'])?$_POST['pw']:null;

    $idFile = $_POST['idFile'];
    $value = $_POST['value'];

    include_once "../control/controlDocumentos.php";
    $result = procesaArchivoRecibido($idFile, $value, $pw);
    if ($result) {
        $mjeType = 1;
        $mjeText = "ARCHIVO PROCESADO ";
    } else {
        $mjeType = 99;
        $mjeText = "CONTRASEÑA ERRONEA O PERMISO DENEGADO";
    }

} else {
    $mjeType = 0;
    $mjeText = "PARAMETROS INCORRECTOS";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);