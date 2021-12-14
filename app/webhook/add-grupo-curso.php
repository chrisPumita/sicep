<?php
$idCurso = $_POST['idCursoGrupo'];
$nombre = $_POST['nombreGrupoNuevo'];
if (isset($nombre) && isset($idCurso)){
    include '../control/controlCursos.php';
    if (agregaGrupoCurso($idCurso,$nombre,1)){
        $mensaje = "Se agregó el grupo ".$nombre;
        $tipoMje = 1;
    }
    else{
        $mensaje = "INTERNAL ERROR";
        $tipoMje = -1;
    }
}
else{
    $mensaje = "no data entry";
    $tipoMje = 0;
}
$mje = array(
    "mjeType" => $tipoMje,
    "Mensaje" => $mensaje
);
echo json_encode($mje);