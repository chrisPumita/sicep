<?php
function modificaBannerCurso($idCurso, $nombreIMG1, $archivo1){
    $carpeta = './resources/banners/'.$idCurso; // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $nombre = "banner-".date('YmdHis');
    $nombre =str_replace(' ', '', $nombre);
    $ruta1 = ".".$carpeta.'/'.$nombreIMG1; // RUTA1 EXAMPLE: ""
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);
    move_uploaded_file($archivo1, $ruta1);
    rename ($ruta1, '.'.$carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/.jpg"
    //Guardar en el modelo de arhcivo
    $dir = '.'.$carpeta;
    foreach(glob($dir.'*.*') as $v){
        unlink($v);
    }
    $path = $carpeta.'/'.$nombre.'.'.$extension;
    include_once "../control/controlCursos.php";
    return updateBanner($idCurso,$path);
}