<?php
include_once "../control/controlAdmin.php";
$data = consultaAdministradores();
echo json_encode([
    'data' => $data,
]);