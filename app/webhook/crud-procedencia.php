<?php
if (!isset($POST['id_procedencia']) && !isset($POST['nombre_procedencia']))
{
    $idProcedencia= $_POST["id_procedencia"];
    $nombreProcedencia = $_POST['nombre_procedencia'];
    include_once "../control/controlGeneral.php";
    $result= insertUpdateProcedencia($idProcedencia,$nombreProcedencia);
    if($result){
        if($idProcedencia>0)
            $mjeText ="Se ha actualizado a: " . $nombreProcedencia;
        else{
            $mjeText = "Se ha registrado: ".$nombreProcedencia;
        }
        $mje = array(
            "mjeType" => "1",
            "Mensaje" => $mjeText
        );
        echo json_encode($mje);    
    }
    else {
        die;
    }
}
else{
    $mjeText="Faltan datos";
    $mje = array(
            "mjeType" => "-1",
            "Mensaje" => $mjeText
        );
        echo json_encode($mje);    
}

