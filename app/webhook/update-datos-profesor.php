<?php
if(isset($_POST['prefijo']) && isset($_POST['nombre_profesor'])&& isset($_POST['app_profesor'])&& isset($_POST['apm_profesor'])
&& isset($_POST['sexo'])&& isset($_POST['telefono'])&& isset($_POST['correo'])&& isset($_POST['departamento'])){
    $params= [
        "nombre"=> $_POST['nombre_profesor'],
        "app"=> $_POST['app_profesor'],
        "apm"=> $_POST['apm_profesor'],
        "sexo"=> $_POST['sexo'],
        "telefono"=> $_POST['telefono'],
        "correo"=> $_POST['correo'],
        "idDepartamento"=> $_POST['departamento'],
        "prefijo"=> $_POST['prefijo']
    ];
    include_once "../control/controlProfesor.php";
    if(actualizaPerfil($params)){
        $mjeType=1;
        $mjeText="Se han actualizado los datos.";    
    }
    else {
        $mjeType=-1;
        $mjeText="Error Interno.";
    }
}
else {
    $mjeType=0;
    $mjeText="Faltan datos.";
}
$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);