<?php
if (isset($_POST['id_aula']) && isset($_POST['edificio']) && isset($_POST['aula'])&& isset($_POST['campo']) && isset($_POST['cupo']) )
{
    $params = [
        "idAula"=> $_POST["id_aula"],
        "edificio" => $_POST['edificio'],
        "aula"=> $_POST['aula'],
        "campo" => $_POST['campo'],
        "cupo"=> $_POST['cupo']
    ];
    
    include_once "../control/controlGeneral.php";
    $result= insertUpdateAula($params);
    if($result){
        $mjeTipe = 1;
        if($params['idAula']>0)
            $mjeText ="Se ha actualizado lod datos del aula";
        else{
            $mjeText = "Se ha registrado un nuevo aula";
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