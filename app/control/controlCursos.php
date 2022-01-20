<?php
/*Funcion para consultar todos los cursos LFHL*/
function consultaCursos($typeFiltro,$value){
    include_once "../model/CURSO.php";
    $CURSO = new CURSO();
    $result = $CURSO->queryconsultaCursos($typeFiltro,$value);
    return $result;
}

//funcion que actualiza los detalles del curso
function updateDetallesCurso($params){
    include_once "../model/CURSO.php";
    $CURSO = new CURSO();
    $CURSO ->setIdCurso($params['idCurso']);
    $CURSO->setNombreCurso($params['nombre_curso']);
    $CURSO->setDirigidoA($params['dirigidoA']);
    $CURSO->setObjetivo($params['objetivo']);
    $CURSO->setDescripcion($params['descripcion']);
    $CURSO->setNoSesiones($params['noSesiones']);
    $CURSO->setAntecedentes($params['antecedentes']);
    $CURSO->setCostoSugerido($params['costo']);
    $CURSO->setTipoCurso($params['tipoCurso']);
    return $CURSO->actualizaCurso();
}
function addCurso($params,$documentacion){
    include_once "../model/CURSO.php";
    $CURSO= new CURSO();
    include_once "keyGen/generadorClaves.php";
    $clave = genIdCurso();
    //Entramos a la session
    session_start();
    $idAutor= $_SESSION['idProfesor'];
    $CURSO->setIdCurso($clave);
    $CURSO->setIdProfesorAdminAcredita($params['idProfesorAdmin']);
    $CURSO->setIdProfesorAutor($idAutor);
    $CURSO->setCodigo($params['codigo']);
    $CURSO->setNombreCurso($params['nombre_curso']);
    $CURSO->setDirigidoA($params['dirigido']);
    $CURSO->setObjetivo($params['objetivo']);
    $CURSO->setDescripcion($params['descripcion']);
    $CURSO->setNoSesiones($params['noSesiones']);
    $CURSO->setAntecedentes($params['antecedentes']);
    $CURSO->setCostoSugerido($params['costo']);
    $CURSO->setLinkTemarioPdf('');
    $CURSO->setFechaCreacion(date("Y-m-d H:i:s"));
    $CURSO->setBannerImg('../resources/banners/ban-fesc.jpg');
    $CURSO->setTipoCurso($params['tipoCurso']);
    $obj_curso= $CURSO->registraCurso();
    //Si el curso se acredita verificamos los archivos que llegan.
    if($obj_curso){
        //Apartado donde se mete el link despues de guardarlo en el servidor
        //Verificamos si llega un archivo de temario
        if($params['linkTemarioFile']!=""){
            //Generar el archivo en servidor
            include_once "controlArchivos.php";
            modificaArchivoPdf($CURSO->getIdCurso(),$params['linkTemarioName'],$params['linkTemarioFile']);
        } 
        //verificamos si llega un archivo de banner
        if($params['bannerFile']!=""){
            include_once "controlArchivos.php";
            modificaBannerCurso($clave,$params['bannerName'],$params['bannerFile']);
        }
        //Crear procedimiento para los documentos, si Documentos esta definido
        if(count($documentacion)>0){
            //Mandar al control Documentos
            include_once "controlDocumentos.php";
            addListaDocumentosSolicitados($CURSO->getIdCurso(),$documentacion);
        }
        return $clave;
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

//Actualiza el estatus del curso
function actualizaEstatusCurso($idCurso,$estatus,$isAcredit){
    include_once "../model/CURSO.php";
    $CURSO= new CURSO();
    $CURSO->setIdCurso($idCurso);
    $CURSO->setAprobado($estatus);
    if($isAcredit){
        $CURSO->setIdProfesorAdminAcredita(0);
        //ya esta acreditado solo cambiamos el estado
    }
    else{
        session_start();
        $CURSO->setIdProfesorAdminAcredita($_SESSION['idProfesor']);
    }
    //Seteamos el id para el profesor admin acredita
    return $CURSO->queryUpdateEstatusCurso();
}

//COnsulta de temario de curso especifico
function consultaTemas($id_curso_fk)
{
    include_once "../model/TEMAS.php";
    $temas = new TEMAS();
    return  $temas->consultaTemas($id_curso_fk);
}
//Funcion add tema a curso
function insertUpdateTema($params){
    include_once "../model/TEMAS.php";
    $TEMA = new TEMAS();
    $TEMA->setIdTema($params['idTema']);
    $TEMA->setIdCursoFk($params['idCurso']);
    $TEMA->setIndice($params['indice']);
    $TEMA->setNombre($params['nombreTema']);
    $TEMA->setResumen($params['resumen']);
    return $params['idTema']>0 ? $TEMA->queryUpdateTema() : $TEMA->queryInsertTema();
}

//funcion elimina tema de curso
function deleteTema($id){
    include_once "../model/TEMAS.php";
    $TEMA = new TEMAS();
    $TEMA->setIdTema($id);
    return $TEMA->queryDeleteTema();
}
//COnsult lista de grupos por curso

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
//Horarios presenciales
function getHorarioPresencial($idGrupo){
    include_once "../model/HORARIO_CLASE_P.php";
    $HP = new HORARIO_CLASE_P();
    $HP->setIdGrupoFk($idGrupo);
    return $HP->queryConsultaHorario();
}
//Insert/Update Horario Presencial
function insertUpdateHorarioP($params){
    include_once "../model/HORARIO_CLASE_P.php";
    $HP = new HORARIO_CLASE_P();
    $HP->setIdHorarioPres($params['idHorarioPres']);
    $HP->setIdGrupoFk($params['idGrupoFk']);
    $HP->setIdAulaFk($params['idAulaFk']);
    $HP->setDiaSemana($params['diaSemana']);
    $HP->setHoraInicio($params['horaInicio']);
    $HP->setDuracion($params['duracion']);
    return $params['idHorarioPres']>0 ? $HP->queryUpdateHorario() : $HP->queryInsertHorario();
}
//Funcion elimina horario presencial
function deleteHorarioP($idHorario){
    include_once "../model/HORARIO_CLASE_P.php";
    $HP = new HORARIO_CLASE_P();
    $HP->setIdHorarioPres($idHorario);
    return $HP->queryDeleteHorario();
}

//Funciones Horario virtual
function getHorarioVirtual($idGrupo){
    include_once "../model/HORARIO_CLASE_V.php";
    $HV = new HORARIO_CLASE_V();
    $HV->setIdGrupo($idGrupo);
    return $HV->queryConsultaHorario();
}

//CRUD HV
function insertUpdateHV($params){
    include_once "../model/HORARIO_CLASE_V.php";
    $HV = new HORARIO_CLASE_V();
    $HV->setIdHorarioVirtual($params['idHorarioV']);
    $HV->setIdGrupo($params['idGrupoFk']);
    $HV->setDiaSemana($params['diaSemana']);
    $HV->setHoraInicio($params['horaInicio']);
    $HV->setDuracion($params['duracion']);
    $HV->setReunion($params['reunion']);
    $HV->setPlataforma($params['plataforma']);
    $HV->setUrlReunion($params['urlReunion']);
    $HV->setUrlPlataforma($params['urlPlataforma']);
    return $params['idHorarioV']>0 ? $HV->queryUpdateHorario() : $HV->queryInsertHorario();
}
//Funcion elimina Horario Virtual
function deleteHorarioV($idHorario){
    include_once "../model/HORARIO_CLASE_V.php";
    $HV = new HORARIO_CLASE_V();
    $HV->setIdHorarioVirtual($idHorario);
    return $HV->queryDeleteHorario();
}
function getDescuentos($idCurso){
    include_once "../model/DESCUENTOS.php";
    $DESC = new DESCUENTOS();
    $DESC->setIdCursoFk($idCurso);
    return $DESC->queryConsultaDesceuntosCurso();
}
//Funcion elimina Descuento
function deleteDescuento($idCurso,$idProcedencia){
    include_once "../model/DESCUENTOS.php";
    $DESC = new DESCUENTOS();
    $DESC->setIdCursoFk($idCurso);
    $DESC->setIdTipoProcedenciaFk($idProcedencia);
    return $DESC->queryDeleteDescuento();
}

//funcion actuliza descuento
function updateDescuento($params){
    include_once "../model/DESCUENTOS.php";
    $DESC = new DESCUENTOS();
    $DESC->setIdCursoFk($params['idCurso']);
    $DESC->setIdTipoProcedenciaFk($params['idProcedencia']);
    $DESC->setPorcentajeDesc($params['descuento']);
    return $DESC->queryUpdateDescuento();
}

//funcion agrega descuento
function insertDescuento($params){
    include_once "../model/DESCUENTOS.php";
    $DESC = new DESCUENTOS();
    $DESC->setIdCursoFk($params['idCurso']);
    $DESC->setIdTipoProcedenciaFk($params['idProcedencia']);
    $DESC->setPorcentajeDesc($params['descuento']);
    return $DESC->queryInsertDescuento();
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
//Controles alternos
function controlUpdateInsertDocSol($params){
    //Mandamos al control correcto 
    include_once "controlDocumentos.php";
    return insertUpdateDocSol($params);
}

function controlDeleteDocSol($idDocSol){
    //Se manda a su respectivo control
    include_once "controlDocumentos.php";
    return deleteDocumentoSolicitado($idDocSol);
}