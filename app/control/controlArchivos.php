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

function modificaArchivoPdf($idCurso, $nombrePDF, $archivo1){
    //Tipo es el tipo de archivo que se va a guardar, tipo temario, etc
    $carpeta = '../../resources/temario/'.$idCurso; // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $nombre = "temario-".date('YmdHis');
    $nombre =str_replace(' ', '', $nombre);
    $ruta1 = $carpeta.'/'.$nombrePDF; // RUTA1 EXAMPLE: ""
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);
    $path = '../resources/temario/'.$idCurso.'/'.$nombre.'.'.$extension;
    //BOrrando los elementos que puedan existir en la carpeta
    $dir = $carpeta.'/';
    foreach(glob($dir.'*.*') as $v){ unlink($v); }
    move_uploaded_file($archivo1, $ruta1);
    rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/.jpg"
    include_once "../control/controlCursos.php";
    return  updateLinkTemario($idCurso,$path);
}

function removePdfCurso($idCurso){
    include_once "../control/controlCursos.php";
    //default path
    $path = NULL;
    return updateLinkTemario($idCurso,$path);
}
function updateFotoPerfil($id,$nombreImg,$imgFile,$typeAccess){
    //toda la logica del profesor
    $folder = md5($id.$typeAccess);
    $carpeta = '../../resources/avatars/'.$folder; // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $nombre = "pimg-".date('YmdHis');
    $nombre =str_replace(' ', '', $nombre);
    $ruta1 = $carpeta.'/'.$nombreImg; // RUTA1 EXAMPLE: ""
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);

    $path = '../resources/avatars/'.$folder.'/'.$nombre.'.'.$extension;

    //BOrrando los elementos que puedan existir en la carpeta
    $dir = $carpeta.'/';
    foreach(glob($dir.'*.*') as $v){ unlink($v); }

    move_uploaded_file($imgFile, $ruta1);
    rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/.jpg"
    if ($typeAccess == 0){
        include_once "../control/controlAlum.php";
        $result= updateFotoAlumno($id,$path);
        if($result){
            $_SESSION['perfil_image'] = $path;
            return $result;
        }
    }
    else{
        include_once "../control/controlProfesor.php";
        $result = updateFotoProfesor($id,$path);
        if ($result) $_SESSION['img_perfil'] = $path;
        return $result;
    }
}

function procesaDocInscAlumno($archivo1,$nombreFILE1,$idFile,$folio,$idDocSol,$idAlumno)
{
    //validamos que el documento requerido SI sea del alumno
    include_once "../model/ARCHIVO.php";
    $FILE = new ARCHIVO();
    $FILE->setIdDocSol($idDocSol);
    $FILE->setIdInscripcionFk($folio);
    if ($idFile<=0){
        //vamos a inseryar nuevo documento, verificamos que sea uno solicitado y coincida con la isncripcion y alumno
        $resultObje = $FILE->queryValidaDocSolMatch($idAlumno);
        if ($resultObje){
            $fileType = $resultObje[0]['nombre_doc'];
            //Archivo correctro, procedemos a almacenar
            $docFisico = modificaArchivoAlumno($idAlumno,$folio,$fileType, $nombreFILE1, $archivo1,"");
            if ($docFisico!= null){
                //Iniciamos el almacenamiento del documento en La DB //completando los datos al file
                $FILE->setNombreDoc($docFisico['nombre']);
                $FILE->setPath($docFisico['path']);
                $FILE->setNotas('Alumno: Se envia documento para su revición y acreditación');
                return $FILE->queryInsertArchivoSolicituAlumno();
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
    else{
        //se va a editar el archivo solamente
        return false;
    }
}



function modificaArchivoAlumno($idAlumno,$idInsc, $fileType, $nombrePDF, $archivo1,$RutaFileAnterior)
{
    //Tipo es el tipo de archivo que se va a guardar, tipo temario, etc
    $carpeta = '../archive/'.md5($idAlumno).'/'.md5($idInsc); // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $nombre = $fileType."-".date('YmdHis');
    $nombre =str_replace(' ', '-', $nombre);
    $ruta1 = $carpeta.'/'.$nombrePDF; // RUTA1 EXAMPLE: ""
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);
    if ($RutaFileAnterior!=""){
        unlink(".".$RutaFileAnterior);
    }
    $path = './archive/'.md5($idAlumno).'/'.md5($idInsc).'/'.$nombre.'.'.$extension;
    //BOrrando los elementos que puedan existir en la carpeta
    try {
        move_uploaded_file($archivo1, $ruta1);
        rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/.jpg"
        return array(
            "nombre" =>$nombre.'.'.$extension,
            "path" =>$path
        );
    }
    catch (Exception $e){
        return null;
    }
}
