<?php
if (isset($_POST['idCurso']) && $_FILES['imgBanner']['name']) {
    $idCurso = $_POST['idCurso'];
    $nombreIMG1 = $_FILES['imgBanner']['name']; //Obteniendo el nombre1
    $archivo1 = $_FILES['imgBanner']['tmp_name']; //OBteniendo el file1
    include_once "../control/controlArchivos.php";
    echo modificaBannerCurso($idCurso, $nombreIMG1, $archivo1) ? "Se ha Modificado el banner" : "Ocurrio un error interno";
} else {
    echo "Faltan datos";
}