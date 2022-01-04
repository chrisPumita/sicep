<?php

include_once "../control/controlEstadisticas.php";
/*
include_once "../control/controlSecurity.php";
$encritpado = encryption("CHRIS");
$desencriptado = decryption("RXRKbWdhSDlERmN2ejdocUREcnVodz09");
 * */

$resultados = array(
    "alumnosCountVerif" => cuentaRevisionCuentas(),
    "solPendientes" => cuentaSolicitudesPendientes(),
    "cursosPendRev" => cuentaCursosPendientesRevisar(),
    "archivosPendientes" => cuentaDocsPendRev()
);
echo json_encode($resultados);