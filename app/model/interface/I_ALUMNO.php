<?php

interface I_ALUMNO
{
    public function consultarListaAlumnos($edoFiltro,$idAlumno);
    function consultaAlumno($id_alumno);
    public function filtrarListaAlumnos($tipo_filtro, $valor);
    function agregaAlumno();
    function modificaAlumno();
    function modifcaPw($id_alumn,$pwd);
    function eliminaAlumno($id_alumno);
    function updateEstatusAlumno($id_alumno,$estatus);
    function consultaCuentaServSoc($id_alumn);
    function crearCuentaServSoc();
    function modificarCuentaServSoc();
    function terminarServSoc();
    function cambiarClaveServSoc();
}