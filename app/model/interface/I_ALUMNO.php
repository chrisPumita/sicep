<?php

interface I_ALUMNO
{
    /*CRUD ALUMNO*/
    public function queryConsultaListaAlumnos($edoFiltro,$idAlumno);
    public function queryFiltrarListaAlumnos($tipo_filtro, $valor);

    function queryInsertAlumno();
    function queryConsultaAlumno();

    function queryUpdateEstatusAlumno();
    function queryUpdateAlumno();
    function queryUpdatePw();
    function queryDeleteAlumno();
}