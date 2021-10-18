<?php


interface I_DOCUMENTOS
{
    function consultaDocumentos();

    function modificaDocumento();

    function crearDocumento();

    // DELETE, id * -1 , estatus 0; activo 1
    function borrarDocumento($idDocumento,$estatus);

}