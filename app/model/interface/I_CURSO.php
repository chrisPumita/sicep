<?php


interface I_CURSO
{
    public function queryconsultaCursos($typeFiltro,$valueo);
    //regresa una lista de grupos del curso
    public function queryConsultaListaGrupos();

    public function consultaGroupKeys($id_curso);

    public function consultaDocsSolicitados($id_curso);

    function registraCurso();

    function actualizaCurso();

    function agregaKeywordGrupo($keyword);

    function quitarKeyword($id_key,$id_curso);

    //  function agregaDocumentoSol($documentoSolicitado, $obl);

    function quitarDocumetoSolicitado($id_doc_solicitado, $id_curso);

}