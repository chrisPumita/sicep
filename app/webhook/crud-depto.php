<?php
if (!isset($POST['id_depto']) && !isset($POST['nombre_depto']))
{
    $idDepto= $_POST["id_depto"];
    $nombreDepto = $_POST['nombre_depto'];
    include_once "../control/controlGeneral.php";
    $result= insertUpdateDepartamento($idDepto,$nombreDepto);
    if($result){
        if($idDepto>0)
            $mjeText ="Se va a Actualizar a " . $nombreDepto;
        else{
            $mjeText = "Registro ingresado";
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


