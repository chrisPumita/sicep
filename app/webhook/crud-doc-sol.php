<?php
if (isset($_POST['idDocSol']) && isset($_POST['idDocumento']) && isset($_POST['idCurso'])&& isset($_POST['obligatorio']))
{
    $params = [
        "idDocSol"=>$_POST['idDocSol'],
        "idDoc"=>$_POST['idDocumento'],
        "idCurso"=>$_POST['idCurso'],
        "obligatorio"=>$_POST['obligatorio']
    ];
    include_once "../control/controlCursos.php";
    $result= controlUpdateInsertDocSol($params);
    if($result){
        if($params['idDocSol']>0){
            $mjeType= 1;
            $mjeText ="Se han actualizado los datos.";
        }else{
            $mjeType= 1;
            $mjeText = "Se ha agregado correctamente.";
        }
    }
    else {
        $mjeType= -1;
        $mjeText= "Error Interno.";
    }
}
else{
    $mjeType=0;
    $mjeText="Faltan datos.";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);


