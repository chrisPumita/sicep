<?php


interface I_DOCS_SOLICITADOS
{
    function consultarListaDocumentosSol($id_curso);

    function crearDocumentosSol();

    function eliminaDocumentoSolicitado($id_documento_sol);

    function cambiarOblig($estatus);

}