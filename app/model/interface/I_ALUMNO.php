<?php

interface I_ALUMNO
{
    public function queryConsultaListaAlumnos($edoFiltro,$idAlumno);
    function queryInsertAlumno();
    function queryConsultaAlumno($id_alumno);
    public function queryFiltrarListaAlumnos($tipo_filtro, $valor);
    function queryUpdateEstatusAlumno($id_alumno,$estatus);
    function queryUpdateAlumno();
    function queryUpdatePw($id_alumn,$pwd);
    function queryDeleteAlumno($id_alumno);
    function queryConsultaCuentaServSoc($id_alumn);
    function queryCreateCuentaServSoc();
    
    
    
    function modificarCuentaServSoc();
    function terminarServSoc();
    function cambiarClaveServSoc();
}