<?php
if (!isset($POST['id_procedencia']) && !isset($POST['nombre_procedencia']))
{
    $idProcedencia= $_POST["id_procedencia"];
    $nombreProcedencia = $_POST['nombre_procedencia'];
    include_once "../control/controlGeneral.php";
    $result= insertUpdateProcedencia($idProcedencia,$nombreProcedencia);
    if($result){
        $mjeTipe = 1;
        if($idProcedencia>0)
            $mjeText ="Se ha actualizado a: " . $nombreProcedencia;
        else{
            $mjeText = "Se ha registrado: ".$nombreProcedencia;
        }
    }
    else {
        $mjeTipe = -1;
        $mjeText="Error interno";
    }
}
else{
    $mjeTipe = 0;
    $mjeText="Faltan datos";
}


$mje = array(
    "mjeType" => $mjeTipe,
    "Mensaje" => $mjeText
);
echo json_encode($mje);