<?php
if(isset($_POST['idCurso']) && isset($_POST['editarNombreCurso'])&& isset($_POST['editarDescripcion']) 
    && isset($_POST['editarObjetivo']) && isset($_POST['editarDirigido']) 
    && isset($_POST['editarAntecedentes']) && isset($_POST['editarModalidad']) && isset($_POST['editarSesiones'])
    && isset($_POST['editarCosto']) ){
        $params = [
            "idCurso"=> $_POST['idCurso'],
            "nombre_curso"=> $_POST['editarNombreCurso'],
            "descripcion"=> $_POST['editarDescripcion'],
            "objetivo"=> $_POST['editarObjetivo'],
            "dirigidoA"=> $_POST['editarDirigido'],
            "antecedentes"=> $_POST['editarAntecedentes'],
            "tipoCurso"=> $_POST['editarModalidad'],
            "noSesiones"=> $_POST['editarSesiones'],
            "costo"=> $_POST['editarCosto']
        ];
        include_once "../control/controlCursos.php";
    $result = updateDetallesCurso($params);
    if($result){
        $mjeType=1;
        $mjeText= "Se ha actualizado correctamente";

    } else{
        $mjeType=-1;
        $mjeText= "Error Interno";
    }
}
else {
    $mjeType=0;
    $mjeText="Faltan datos";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);