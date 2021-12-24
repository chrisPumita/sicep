<?php

interface I_INSCRIPCION
{
    function consultaSolcitudInscripciones($filtro,$idAsig,$valor);

    function queryRegistraInscripcion();

    //Confirma el pago de la inscripcion y valida la autorizacion
    function confirmaPago($confirmacion);

    //crea una validacion
    function validaAutorizacion($id_admin,$fechaPago,$monto,$desc,$notas);

    function inscribeEnActa();

    function modificaEstado($id_inscripcion,$estado_insc);

    function eliminaRegistroInscripcion($id_inscripcion);

}