<?php


interface I_ASIG_GRUPO
{
    /*Para consultar los horarios*/
    function queryConsultaHorarioVirtual($id_asig);
    function queryConsultaHorarioPresencial($id_asig);
    public function queryConsultaAsignacionProfesor($id);
    function queryInsertAsignacion();
    function queryUpdateEstatus($id_asignacion,$estatus);
    function queryUpdateAsignacion();
    function queryConsultaAsignacionGrupos($valorFiltro);

}