<?php


interface I_ARCHIVO
{
    // Regresar una lista de documentos propios de una inscripcion
    function queryConsultaArchivos($id_incripcion);

    function queryUpdateArchivo();

    //elimina a nivel DB
    function queryDeleteArchivo($id_archivo);

    //fun esps, elimina a nivel lo host
    function queryDeleteArchivoPath($path);

    function queryInsertArchivo();

    function queryCreateArchivoPath($nombreArchivo,$Archivo);

}