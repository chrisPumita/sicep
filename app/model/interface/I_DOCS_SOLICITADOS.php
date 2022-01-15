<?php


interface I_DOCS_SOLICITADOS
{
    //Obligatorio = 1 Se activa inscripcion 0 no se activa inscripcion
    function queryListaDocumentosSol();

    function queryEliminaDocumentoSolicitado();

    function cambiarObligDocSol();

}