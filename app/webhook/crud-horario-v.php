<?php
if (isset($_POST['idHorarioV']) && isset($_POST['idGrupo']) && isset($_POST['dia'])&& isset($_POST['horaInicio'])
&& isset($_POST['duracion']) && isset($_POST['reunion'])&& isset($_POST['plataforma']))
{
    $params = [
        "idHorarioV"=>$_POST['idHorarioV'],
        "idGrupoFk"=>$_POST['idGrupo'],
        "diaSemana"=>$_POST['dia'],
        "horaInicio"=>$_POST['horaInicio'],
        "duracion"=> $_POST['duracion'],
        "plataforma"=>$_POST['plataforma'],
        "urlPlataforma"=> $_POST['urlPlataforma'],
        "reunion"=> $_POST['reunion'],
        "urlReunion"=> $_POST['urlReunion']
    ];
    include_once "../control/controlCursos.php";
    $result= insertUpdateHV($params);
    if($result){
        if($params['idHorarioV']>0){
            $mjeType= 1;
            $mjeText ="Se han actualizado los datos.";
        }else{
            $mjeType= 1;
            $mjeText = "Se ha registrado un nuevo horario virtual.";
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