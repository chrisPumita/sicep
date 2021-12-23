<?php
$mjeText="mensaje de Backend";
$mje = array(
    "mjeType" => 1,
    "Mensaje" => $mjeText
);
echo json_encode($mje);