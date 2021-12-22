<?php
function modificaBannerCurso($idCurso, $nombreIMG1, $archivo1){
    $carpeta = '../../resources/banners/'.$idCurso; // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $nombre = "banner-".date('YmdHis');
    $nombre =str_replace(' ', '', $nombre);
    $ruta1 = $carpeta.'/'.$nombreIMG1; // RUTA1 EXAMPLE: ""
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);

    $path = '../resources/banners/'.$idCurso.'/'.$nombre.'.'.$extension;

    //BOrrando los elementos que puedan existir en la carpeta
    $dir = $carpeta.'/';
    foreach(glob($dir.'*.*') as $v){ unlink($v); }

    move_uploaded_file($archivo1, $ruta1);
    rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/.jpg"

    include_once "../control/controlCursos.php";
    return updateBanner($idCurso,$path);
}

function removeBanner($idCurso){
    include_once "../control/controlCursos.php";
    //default path
    $path = "../resources/banners/ban-fesc.jpg";
    return updateBanner($idCurso,$path);
}