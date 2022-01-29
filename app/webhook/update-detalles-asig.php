<?php
//Update asignacion data
if( isset($_POST['idAsignacion']) && isset($_POST['costo'])&& isset($_POST['modalidad']) && isset($_POST['visibilidad'])
&& isset($_POST['cupo']) && isset($_POST['campus']) && isset($_POST['notas'])){
    $params = [
        "idAsignacion"=>$_POST['idAsignacion'],
        "newProfAsig"=> $_POST['idProfesorAsig'],
        "newGrupo"=> $_POST['idGrupo'],
        "newGeneracion"=> $_POST['idGeneracion'],
        "newSemestre"=> $_POST['semestre'],
        "newCosto"=> $_POST['costo'],
        "newModalidad"=> $_POST['modalidad'],
        "newVisibilidad"=> $_POST['visibilidad'],
        "newCupo"=> $_POST['cupo'],
        "newCampus"=> $_POST['campus'],
        "newNotas"=> $_POST['notas']
    ];
    include_once "../control/controlAsignaciones.php";
    if(updateDatosAsignacion($params)){
        $mjeType=1;
        $mjeText="Se ha actualizado con exito.";
    } else {
        $mjeType=-1;
        $mjeText="Error Interno.";
    }

}else{
    $mjeType=0;
        $mjeText="Faltan datos.";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);