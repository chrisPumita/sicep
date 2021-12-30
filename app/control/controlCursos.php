<?php
/*Funcion para consultar todos los cursos LFHL*/
function consultaCursos($typeFiltro,$value){
    include_once "../model/CURSO.php";
    $CURSO = new CURSO();
    $result = $CURSO->queryconsultaCursos($typeFiltro,$value);
    return $result;
}

function addCurso($params){
    include_once "../model/CURSO.php";
    $CURSO= new CURSO();
    $clave = date('YmdHis');
    $CURSO->setIdCurso($clave);
    $CURSO->setIdProfesorAdminAcredita($params['idProfesorAdmin']);
    $CURSO->setIdProfesorAutor($params['idAutor']);
    $CURSO->setCodigo($params['codigo']);
    $CURSO->setNombreCurso($params['nombre_curso']);
    $CURSO->setDirigidoA($params['dirigido']);
    $CURSO->setObjetivo($params['objetivo']);
    $CURSO->setDescripcion($params['descripcion']);
    $CURSO->setNoSesiones($params['noSesiones']);
    $CURSO->setAntecedentes($params['antecedentes']);
    $CURSO->setCostoSugerido($params['costo']);
    $CURSO->setLinkTemarioPdf('../resources/temario/');
    $CURSO->setFechaCreacion(date("Y-m-d H:i:s"));
    $CURSO->setBannerImg('../resources/banners/default.jpg');
    $CURSO->setTipoCurso($params['tipoCurso']);
    $obj_curso= $CURSO->registraCurso();
    //Si el curso se acredita verificamos los archivos que llegan.
    if($obj_curso){
        //Apartado donde se mete el link despues de guardarlo en el servidor
        //Verificamos si llega un archivo de temario
        if($params['linkTemarioFile']!=""){
            //Generar el archivo en servidor
            include_once "controlArchivos.php";
            modificaArchivoPdf($clave,$params['linkTemarioName'],$params['linkTemarioFile']);
        } 
        //verificamos si llega un archivo de banner
        if($params['bannerFile']!=""){
            include_once "controlArchivos.php";
            modificaBannerCurso($clave,$params['bannerName'],$params['bannerFile']);
        }
        return true;
    }
    else {
        return false;
    }
}
//LFHL
function consultaAcredita($idCurso){
    include_once "../model/CURSO.php";
    //return json_encode(CURSO::consultaAcredita($idCurso));
    $obj_curso= new CURSO();
    return $obj_curso->consultaAcreditacion($idCurso);
}

//COnsulta de temario de curso especifico
function consultaTemas($id_curso_fk)
{
    include_once "../model/TEMAS.php";
    $temas = new TEMAS();
    return  $temas->consultaTemas($id_curso_fk);
}

function consultaListaGrupos($idCurso){
    include_once "../model/CURSO.php";
    $curso = new CURSO();
    $curso->setIdCurso($idCurso);
    return  $curso->queryConsultaListaGrupos();
}

function agregaGrupoCurso($idCurso,$nombreGruppo,$estatusGrupo){
    include_once "../model/GROUPS.php";
    $grupo = new GROUPS();
    $grupo->setIdCursoFk($idCurso);
    $grupo->setGrupo($nombreGruppo);
    $grupo->setEstatus($estatusGrupo);
    return $grupo->crearGrupo();
}

function updateBanner($idCurso, $path){
    include_once "../model/CURSO.php";
    $obj_curso= new CURSO();
    $obj_curso->setIdCurso($idCurso);
    $obj_curso->setBannerImg($path);
    return $obj_curso->queryUpdateBanner();
}

//Funcion que regresa el horario precencial y virtuaul de un grupo en especifico
function getHorariosGrupo($idGrupo){
    $HORARIO = array(
        "HP" =>  getHorarioPresencial($idGrupo),
        "HV" => getHorarioVirtual($idGrupo)
    );
    return $HORARIO;
}

function getHorarioPresencial($idGrupo){
    include_once "../model/HORARIO_CLASE_P.php";
    $HP = new HORARIO_CLASE_P();
    $HP->setIdGrupo($idGrupo);
    return $HP->queryConsultaHorario();
}

function getHorarioVirtual($idGrupo){
    include_once "../model/HORARIO_CLASE_V.php";
    $HV = new HORARIO_CLASE_V();
    $HV->setIdGrupo($idGrupo);
    return $HV->queryConsultaHorario();
}

function getDescuentos($idCurso){
    include_once "../model/DESCUENTOS.php";
    $DESC = new DESCUENTOS();
    $DESC->setIdCursoFk($idCurso);
    return $DESC->queryConsultaDesceuntosCurso();
}

//CONTADORES

function countCursosPendientesRevisar(){
    include_once "../model/CURSO.php";
    $obj_curso= new CURSO();
    return $obj_curso->queryCountPerdientesRevisar();
}

function updateLinkTemario($idCurso,$path){
    include_once "../model/CURSO.php";
    $obj_curso= new CURSO();
    $obj_curso->setIdCurso($idCurso);
    $obj_curso->setLinkTemarioPdf($path);
    return $obj_curso->queryUpdateLinkTemario();
}