<?php
$idProfesor = $_POST['idProfesor'];
if (isset($idProfesor)){
    include_once "../control/controlProfesor.php";
    $data = consultaProfesores(0,$idProfesor);
    $mjeText = count($data)>0 ? "Hemos encontrado resultados":"No encontramos coincidencias";
}
else{
    $mjeText = "No hay datos entrantes";
    $data =[];
}

$mje = array(
    "mjeType" => "-1",
    "Mensaje" => $mjeText,
    "data" => $data
);
echo json_encode($mje);