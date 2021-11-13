<?php
$params = [
    //Datos persona
    "nombre_profesor" => $_POST['nombre_profesor'],
    "app" => $_POST['app'],
    "apm" => $_POST['apm'],
    "telefono" => $_POST['telefono'],
    "sexo" => $_POST['sexo'],    
    //Datos Profesor
    "no_trabajador" => $_POST['no_trabajador'],
    "idDepto" => $_POST['depto'],
    "Prefijo" => $_POST['prefijo'],
    "correo" => $_POST['correo'],
    "pwd" => "0000",
    "keyHash" => "1111",    
];
/*
include_once "../control/controlProfesor.php";
echo addprofesor($params);
*/
echo "Datos recibidos";
