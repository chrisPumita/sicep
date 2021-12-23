<?php
if (isset($_POST['id_doc']) && isset($_POST['nombre_doc']) && isset($_POST['abreviatura_doc'])&& isset($_POST['peso_max'])&& isset($_POST['admin']))
{
    $params = [
        "idDoc"=>$_POST['id_doc'],
        "nombreDoc"=>$_POST['nombre_doc'],
        "formato"=>$_POST['abreviatura_doc'],
        "peso"=>$_POST['peso_max'],
        "admin"=>$_POST['admin']
    ];
    include_once "../control/controlGeneral.php";
    $result= insertUpdateDocumento($params);
    if($result){
        if($params['idDoc']>0){
            $mjeType= 1;
            $mjeText ="Se ha actualizado a: " . $params['nombreDoc'];
        }else{
            $mjeType= 1;
            $mjeText = "Se ha registrado: ".$params['nombreDoc'];
        }
    }
    else {
        $mjeType= -1;
        $mjeText= "Error Interno";
    }
}
else{
    $mjeType=0;
    $mjeText="Faltan datos";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);


