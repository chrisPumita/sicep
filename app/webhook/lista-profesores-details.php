<?php
$idProfesor = $_POST['idProfesor'];
if (isset($idProfesor)){
    include_once "../control/controlProfesor.php";
    $profes = consultaProfesoresDetails(0,$idProfesor);
    $mjeText = count($profes)>0 ? "Hemos encontrado resultados":"No encontramos coincidencias";
}
else{
    $mjeText = "No hay datos entrantes";
    $profes =[];
}

$mje = array(
    "mjeType" => "-1",
    "Mensaje" => $mjeText,
    "profes" => $profes
);
echo json_encode($mje);