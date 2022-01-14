<?php
if (isset($_POST['idCurso']) && isset($_POST['idProcedencia']) && isset($_POST['descuento'])){
    $params= [
        "idCurso"=> $_POST['idCurso'],
        "idProcedencia"=> $_POST['idProcedencia'],
        "descuento"=> $_POST['descuento']
    ];
    include_once "../control/controlCursos.php";
    if (insertDescuento($params)){
        $mjeType = 1;
        $mjeText = "Se ha agregado con éxito";
        
    }
    else{
        $mjeType = -1;
        $mjeText = "Error Interno";
    }
}
else{
    $mjeType = 0;
    $mjeText = "Faltan Datos";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);