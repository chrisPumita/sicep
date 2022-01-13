<?php

interface I_INSCRIPCION
{
    function consultaSolcitudInscripciones($filtro,$idAsig,$valor);

    function queryFichasInscripcion($docSol,$notValidate,$filtroArchive);

    function queryRegistraInscripcion();

    //Confirma el pago de la inscripcion y valida la autorizacion
    function confirmaPagoRealizado($confirmacion);

    function inscribeEnActa();

    function modificaEstado($id_inscripcion,$estado_insc);

    function eliminaRegistroInscripcion($id_inscripcion);

}