<?php
$password = $_POST['password'];
$cargo = $_POST['cargo'];
$idProfesor = $_POST['id'];
$nivel = $_POST['nivel'];
if (isset($idProfesor)&&isset($password)&&isset($nivel)&&isset($cargo)) {
    include_once "../control/controlAdmin.php";
    if (addNewAdmin($idProfesor,$cargo,$nivel,$password)){
        $action = true;
        $validation =true;
        $mensaje = "Se ha registrado un nuevo administrador";
    }
    else{
        $action = false;
        $validation =false;
        $mensaje = "VALIDACION FALLIDA";
    }
}
else{
    $action = false;
    $validation =false;
    $mensaje = "NO LLEGARON DATOS";
}
$resultados = array(
    "mensaje" => $mensaje,
    "validacion" => $validation,
    "action" => $action
);
echo json_encode($resultados);