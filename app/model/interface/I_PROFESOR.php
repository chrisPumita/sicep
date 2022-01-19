<?php


interface I_PROFESOR
{
    public function queryListaProfesoresAll($filtro,$idProfesorUnique);

    public function queryListProfesoresNoAdmin();

    function queryUpdateEstatusProf($id_profesor, $estatus);

    function  queryConsultaProfesor($id_profesor);

    function queryInsertProfesor();

    function queryUpdateProfesor();

    function queryUpdatePw();

    function queryDeleteProfesor($id_profesor);

    function creaFirmaDigital();

    function cargaFirmaImagen();
}