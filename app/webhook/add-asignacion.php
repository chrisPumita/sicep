<?php
if (isset($_POST['grupos']) && isset($_POST['profesorAsig']) && isset($_POST['modalidad'])&& isset($_POST['generacion'])
&& isset($_POST['semestre'])&& isset($_POST['campus'])&& isset($_POST['numCupo'])&& isset($_POST['costo'])&& isset($_POST['InicioCurso']) && isset($_POST['finCurso'])
&& isset($_POST['inicioInsc'])&& isset($_POST['finInsc']) && isset($_POST['inicioCal'])&& isset($_POST['finCal']))
{
    $params =[
        "grupos"=>$_POST['grupos'],
        "profesorAsig"=>$_POST['profesorAsig'],
        "generacion"=>$_POST['generacion'],
        "semestre"=>$_POST['semestre'],
        "campus"=>$_POST['campus'],
        "InicioCurso"=>$_POST['InicioCurso'],
        "finCurso"=>$_POST['finCurso'],
        "inicioInsc"=>$_POST['inicioInsc'],
        "finInsc"=>$_POST['finInsc'],
        "inicioCal"=>$_POST['inicioCal'],
        "finCal"=>$_POST['finCal'],
        "numCupo"=>$_POST['numCupo'],
        "costo"=>$_POST['costo'],
        "notas"=>$_POST['notas'],
        "modalidad"=>$_POST['modalidad'],
        "publico"=> $_POST['publico']
    ];
    include_once "../control/controlAsignaciones.php";
    $result=insertAsignacion($params);
    if($result){
        $mjeType=1;
        $mjeText = "Se ha creado una nueva asignacion";
    }
    else {
        $mjeType=-1;
        $mjeText="Error Interno";
    }
}
else{
    $mjeType="0";
    $mjeText="Faltan datos";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);    


