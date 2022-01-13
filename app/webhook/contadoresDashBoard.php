<?php
include_once "../control/controlEstadisticas.php";
echo json_encode(getDataDashboard());
/*
include_once "../control/controlSecurity.php";
$encritpado = encryption("CHRIS");
$desencriptado = decryption("RXRKbWdhSDlERmN2ejdocUREcnVodz09");
 * */
