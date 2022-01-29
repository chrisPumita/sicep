<?php
if (isset($_POST['idAsig'])){
    session_start();
    $idAlumno = $_SESSION['id_alumno'];
    $idProcedencia = $_SESSION['id_tipo_procedencia'];
    $idAsig = $_POST['idAsig'];
    include_once "../control/controlAsignaciones.php";
    $result = consultaAsignacionesHistoricasCurso(0,1,$idAsig)[0];
    if (count($result)>0){
        $tipo = 1;
        $mje = "Mande la solicitud de este curso. Esta sera revisada y provedada.";
        $descuento = matchProcedenciaAlumnoDesc($idAsig,$idProcedencia);
    }
    else{
        $tipo = -1;
        $mje = "Error interno, no encontramos los detalles";
        $descuento =0;
    }
    $result = array(
        "mjeType" =>$tipo,
        "Mensaje" =>$mje,
        "datos"=>$result,
        "descuento"=>count($descuento)>0 ? $descuento[0]['porcentaje_desc']:0
    );
}
else {
    $result = array(
        "mjeType" =>0,
        "Mensaje" =>"No encontramos datos"
    );
}
echo json_encode($result);