<?php

interface I_INSCRIPCION
{
    function consultaInscripciones($filtro,$valor);

    function registraInscripcion($id_alumno,$id_asig);

    //Confirma el pago de la inscripcion y valida la autorizacion
    function confirmaPago($confirmacion);

    //crea una validacion
    function validaAutorizacion($id_admin,$fechaPago,$monto,$desc,$notas);

    function inscribeEnActa();

    function modificaEstado($id_inscripcion,$estado_insc);

    function eliminaRegistroInscripcion($id_inscripcion);

}