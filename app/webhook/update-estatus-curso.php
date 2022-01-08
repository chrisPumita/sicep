<?php
if(isset($_POST['idCurso']) && isset($_POST['estatus'])){
    $idCurso=$_POST['idCurso'];
    $estatus=$_POST['estatus'];
    include_once "../control/controlCursos.php";
    $result = actualizaEstatusCurso($idCurso,$estatus);
    if($result){
        $mjeType=1;
        $mjeText= $result;
    }
    else {
        $mjeType=-1;
        $mjeText= "Error interno";
    }

}
else {
    $mjeType=0;
    $mjeText= "Faltan Datos";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);