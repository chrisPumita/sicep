<?php
//$idDepto= "$_POST['id_depto']";
//$nombreDepto = $_POST['nombre_depto'];

$mje = array(
    "mjeType" => "1",
    "Mensaje" => "Ok"
);
$valores= array_values($_POST);
var_dump ($valores);
$keys = array_keys($_POST);
var_dump($keys);
//echo json_encode($mje);

