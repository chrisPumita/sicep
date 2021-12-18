<?php
var_dump($_POST['idCurso']);
var_dump($_FILES['archivo1']['name']);
if (isset($_POST['idCurso']) && $_FILES['archivo1']['name']) {

    $noVehiculo = $_POST['noVehiculo'];
    $nombreIMG1 = $_FILES['archivo1']['name']; //Obteniendo el nombre1
    $archivo1 = $_FILES['archivo1']['tmp_name']; //OBteniendo el file1

  //  include_once "../control/controlArchivos.php";
    echo agregaImagenCoche($noVehiculo, $nombreIMG1, $archivo1) ? "Se ha agregado un archivo" : "Paso algo feo";
} else {
    echo "Faltan datos";
}