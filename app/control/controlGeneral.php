<?php
//Funciones Departamentos
function getListaDepartamentos(){
    include_once "../model/DEPTO.php";
    $DEPTO = new DEPTO();
    return $DEPTO->queryListaDepartamentos();
}
function insertUpdateDepartamento($idDepto,$nombreDepto){
    include_once "../model/DEPTO.php";
    $DEPTO = new DEPTO();
    $DEPTO->setIdDepto($idDepto);
    $DEPTO->setNombreDepto($nombreDepto);
    $result = $idDepto>0 ? $DEPTO->queryUpdateDepto() : $DEPTO->queryInsertDepto();
    return $result;
}

function deleteDepartamento($id){
    include_once "../model/DEPTO.php";
    $DEPTO = new DEPTO();
    return $DEPTO->queryDeleteDepartamento($id);
}

/****Funciones Procedencia****/
function insertUpdateProcedencia($idProcedencia,$nombreProcedencia){
    include_once "../model/TIPO_PROCEDENCIA.php";
    $TIPO= new TIPO_PROCEDENCIA();
    $TIPO->setIdTipoProcede($idProcedencia);
    $TIPO->setTipoProcedencia($nombreProcedencia);
    return $idProcedencia>0 ? $TIPO->editarTipoProcedencia() : $TIPO->crearTipoProcedencia();
}

function deleteProcedencia($id){
    include_once "../model/TIPO_PROCEDENCIA.php";
    $TIPO= new TIPO_PROCEDENCIA();
    $TIPO->setIdTipoProcede($id);
    return $TIPO->eliminarTipoProcedencia();
}


//Funciones universidades
function getListaUniversidades(){
    include_once "../model/UNIVERSIDADES.php";
    $UNI = new UNIVERSIDADES();
    return $UNI->queryListaUniversidades();
}

function insertUpdateUniversidad($idUniversidad,$nombreUniversidad,$siglasUniversidad){
    include_once "../model/UNIVERSIDADES.php";
    $UNI = new UNIVERSIDADES();
    $UNI->setIdUniversidad($idUniversidad);
    $UNI->setNombre($nombreUniversidad);
    $UNI->setSiglas($siglasUniversidad);
    return $idUniversidad>0 ? $UNI->queryUpdateUniversidad() : $UNI->queryInsertUniversidad();
}

function eliminaUnivesidad($id){
    include_once "../model/UNIVERSIDADES.php";
    $UNI = new UNIVERSIDADES();
    $UNI->setIdUniversidad($id);
    return $UNI->queryDeleteUniversidad();
}
//Funciones Aulas
function getListaAulas($filtro, $tipo){
    include_once "../model/AULAS.php";
    $AULA = new AULAS();
    return $AULA->listaAulas($filtro, $tipo);
}
//Funciones Documentos
function getListaDocumentos(){
    include_once "../model/DOCUMENTO.php";
    $DOC = new DOCUMENTO();
    return $DOC->consultaDocumentos();
}
//Funciones Estados
function getListaEstados(){
    include_once "../model/ESTADO_REP.php";
    $EDO= new ESTADO_REP();
    return $EDO->consultaEstados();
}
//Funciones Municipios
function getListaMunicipios($idEstado){
    include_once "../model/ESTADO_REP.php";
    $EDO= new ESTADO_REP();
    return $EDO->consultaMunicipios($idEstado);
}