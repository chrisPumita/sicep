<?php


interface I_PROFESOR
{
    public function queryListaProfesoresAll($filtro);

    public function queryListProfesoresNoAdmin();

    function queryUpdateEstatusProf($id_profesor, $estatus);

    function  queryConsultaProfesor($id_profesor);

    function queryInsertProfesor();

    function queryUpdateProfesor();

    function queryUpdatePw($id_profesor,$pw);

    function queryDeleteProfesor($id_profesor);

    function creaFirmaDigital();

    function cargaFirmaImagen();
}