<?php
include_once "../control/controlAlum.php";
include_once "../control/controlSecurity.php";

$encritpado = encryption("CHRIS");
$desencriptado = decryption("RXRKbWdhSDlERmN2ejdocUREcnVodz09");

$resultados = array(
    "alumnosCountVerif" => countRevisionCuentas(),
    "ENCRIPTADO" => $encritpado,
    "DESENCRUP" => $desencriptado
);
echo json_encode($resultados);