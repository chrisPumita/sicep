<?php


interface I_HORARIO_CLASE_P
{

        function CrearHorario();
        function updateHorario();
        function eliminarhorario($id_Asignatura);
        function ConsultaAulas($tipo_filtro);
        function consultarAula($idHoraClase);

}