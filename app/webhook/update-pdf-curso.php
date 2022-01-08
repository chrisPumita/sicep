<?php
if( isset($_POST['idCursoPDF']) &&isset($_FILES['pdfFile']['name']) && isset($_FILES['pdfFile']['tmp_name'])){

    $idCurso= $_POST['idCursoPDF'];
    $nombrePDF= $_FILES['pdfFile']['name'];
    $archivoPDF= $_FILES['pdfFile']['tmp_name'];

    include_once "../control/controlArchivos.php";
    $result = modificaArchivoPdf($idCurso,$nombrePDF,$archivoPDF);
    if($result){
        $mjeType=1;
        $mjeText="Se ha actualizado con exito el PDF";
    } else{
        $mjeType=-1;
        $mjeText="Error Interno";
    }
}
else {
    $mjeType=0;
    $mjeText="Faltan Datos";
}

$mje = array(
    "mjeType" => $mjeType,
    "Mensaje" => $mjeText
);
echo json_encode($mje);