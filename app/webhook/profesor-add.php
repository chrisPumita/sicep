<?php
$params = [
    //Datos persona
    "nombre_profesor" => $_POST['nombre_profesor'],
    "app" => $_POST['app'],
    "apm" => $_POST['apm'],
    "telefono" => $_POST['telefono'],
    "sexo" => $_POST['sexo'],    
    //Datos Profesor
    "no_trabajador" => $_POST['notrabajador'],
    "idDepto" => $_POST['depto'],
    "Prefijo" => $_POST['prefijo'],
    "correo" => $_POST['correo'],
    "pwd" => "0000",
    "keyHash" => "1111"   
];

include_once "../control/controlProfesor.php";
if(addprofesor($params)){
    $mje = "Hemos registrado al profesor ".$params['nombre_profesor']." ";
    $tipo = 1;
}
else{
    $mje = "El correo o Numero de Empleado ya existe. El profesor debe recuperar la contraseña";
    $tipo = 0;
}

$mje = array(
    "mjeType" => $tipo,
    "Mensaje" => $mje
);
echo json_encode($mje);
