<?php


interface I_ASIG_GRUPO
{
    /*Para consultar los horarios*/
    function consultaHorarioVirtual($id_asig);
    function consultaHorarioPresencial($id_asig);
    public function consultaAsignaciones($id);
    function crearasignacion();
    function cambia_estatus($id_asignacion,$estatus);
    function modificarasignacion();

}