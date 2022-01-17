<?php
if (isset($_POST['idHorPres']) && isset($_POST['idGrupo']) && isset($_POST['idAula'])&& isset($_POST['dia'])
&& isset($_POST['horaInicio']) && isset($_POST['duracion']))
{
    $params = [
        "idHorarioPres"=>$_POST['idHorPres'],
        "idGrupoFk"=>$_POST['idGrupo'],
        "idAulaFk"=>$_POST['idAula'],
        "diaSemana"=>$_POST['dia'],
        "horaInicio"=>$_POST['horaInicio'],
        "duracion"=> $_POST['duracion']
    ];
    include_once "../control/controlCursos.php";
    $result= insertUpdateHorarioP($params);
    if($result){
        if($params['idHorarioPres']>0){
            $mjeType= 1;
            $mjeText ="Se han actualizado los datos.";
        }else{
            $mjeType= 1;
            $mjeText = "Se ha registrado un nuevo horario.";
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