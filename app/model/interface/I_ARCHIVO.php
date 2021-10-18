<?php


interface I_ARCHIVO
{
    // Regresar una lista de documentos propios de una inscripcion
    function consultaArchivos($id_incripcion);

    function modificaArchivo();

    //elimina a nivel DB
    function eliminarArchivo($id_archivo);

    //fun esps, elimina a nivel lo host
    function eliminaArchivoPath($path);

    function crearArchivo();

    function crearArchivoPath($nombreArchivo,$Archivo);

}