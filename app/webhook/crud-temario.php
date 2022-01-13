<?php
if (isset($_POST['idCurso']) && isset($_POST['idTema']) && isset($_POST['indice'])&& isset($_POST['nombreTema'])
&& isset($_POST['descripcion']))
{
    $params = [
        "idTema"=> $_POST['idTema'],
        "idCurso"=> $_POST['idCurso'],
        "indice"=> $_POST['indice'],
        "nombreTema"=> $_POST['nombreTema'],
        "resumen"=> $_POST['descripcion']
    ];
    include_once "../control/controlCursos.php";
    $result = insertUpdateTema($params);
    if($result){
        $mjeTipe = 1;
        if($params['idTema']>0)
            $mjeText ="Se ha actualizado el tema.";
        else{
            $mjeText = "Se ha registrado con exito. ";
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