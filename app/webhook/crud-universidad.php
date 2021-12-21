<?php
if (isset($_POST['id_universidad']) && isset($_POST['nombre_universidad']) && isset($_POST['siglas_universidad']))
{
    $idUniversidad= $_POST["id_universidad"];
    $nombreUniversidad = $_POST['nombre_universidad'];
    $siglasUniversidad= $_POST['siglas_universidad'];
    include_once "../control/controlGeneral.php";
    $result= insertUpdateUniversidad($idUniversidad,$nombreUniversidad,$siglasUniversidad);
    if($result){
        $mjeTipe = 1;
        if($idUniversidad>0)
            $mjeText ="Se ha actualizado a: " . $nombreUniversidad;
        else{
            $mjeText = "Se ha registrado: ".$nombreUniversidad;
        }
    }
    else {
        $mjeTipe = -1;
        $mjeText="Error interno";
    }
}
else{
    $mjeTipe = 0;
    $mjeText="Faltan Datos";
}


$mje = array(
    "mjeType" => $mjeTipe,
    "Mensaje" => $mjeText
);
echo json_encode($mje);