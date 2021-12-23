<?php
&& !isset($POST[''])
//, ,, , ,, , , ,,,
//notas
if (!isset($_POST['idCurso']) && !isset($_POST['profesorAsig']) && !isset($_POST['modalidad'])&& !isset($_POST['grupos'])&& !isset($_POST['generacion'])
&& !isset($_POST['semestre'])&& !isset($_POST['campus'])&& !isset($_POST['numCupo'])&& !isset($_POST['costo'])&& !isset($_POST['InicioCurso']) && !isset($_POST['finCurso'])
&& !isset($_POST['inicioInsc'])&& !isset($_POST['finInsc']) && !isset($_POST['inicioCal'])&& !isset($_POST['finCal']))
{
    $params =[
        "idCurso"=>$_POST['idCurso'],
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
        "chkPublica"=> $_POST['chkPublica'],
        //Duda
        "grupos"=>$_POST['grupos']
    ];
    include_once "../control/controlAsignaciones.php";
    $result= insertAsignacion($params);
    if($result){
        if($idDepto>0)
            $mjeText ="Se ha actualizado a: " . $nombreDepto;
        else{
            $mjeText = "Se ha registrado: ".$nombreDepto;
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


