<?php
    function procesaInscripcionValidacion($password,$idFichaInsc,$val){
        include_once "controlAdmin.php";
        if (validacionAdminAccount($password,3)){
            switch ($val){
                case 0:
                    #se cancela la inscripcion
                    $notas = "Solicitud Cancelada el día ".date('Y-m-d H:i:s')."<br>";
                    $confirmacionPago= false;
                    $info = "CANCELADO";
                    $subtotal = 0;
                    break;
                case 1:
                    //Se paga el curso
                    $confirmacionPago= true;
                    $info = "ACREDITADO";
                    $ficha =  consultaFichaPagoInscripcion($idFichaInsc)[0];
                    $total = $ficha['costo_real'];
                    $desc = $ficha['descuento'];
                    if ($desc!=null){
                        $subtotal = $total - (($total*$desc)/100);
                    }
                    else{
                        $subtotal = $total;
                    }
                    $notas = "Pago aprobado el día ".date('Y-m-d H:i:s')."<br>Monto registrado: $".$subtotal;
                    break;
                case 2:
                    $info = "ACREDITADO";
                    $confirmacionPago= true;
                    $notas = "Pago 100% descuento acreditado el día ".date('Y-m-d H:i:s')."<br>";
                    $subtotal = 0;
                    #se completa curso con beca 100%
                    break;
                default:
                    $confirmacionPago= false;
                    return false; #error no encontrado
            }

            //crear la validacion inscripcion
            include_once "../model/INSCRIPCION.php";
            $I = new INSCRIPCION();
            $I->setIdInscripcion($idFichaInsc);
            $I->setNotas($notas);
            if($I->confirmaPagoRealizado($confirmacionPago)){
                $idAdmin = $_SESSION['idProfesor'];
                return $I->creaValidacionInscripcion($idAdmin,$subtotal,$info);
            }
            return false;
        }
        return false;
    }

    function revisaInscipcionPrevia($idAsig,$idAlumno)
    {
        include_once "../model/INSCRIPCION.php";
        $objInsc = new INSCRIPCION();
        $objInsc->setIdAsignacionFk($idAsig);
        $objInsc->setIdAlumnoFk($idAlumno);
        return $objInsc->queryRevisaInscripcionAlumno();
    }

    function getListaAlumnosAsignacion($idAsig)
    {
        include_once "../model/INSCRIPCION.php";
        $objInsc = new INSCRIPCION();
        $ListaSolicitudes = array(
            "SolicPend" => $objInsc->consultaSolcitudInscripciones(1, $idAsig, false),
            "OficList" => $objInsc->consultaSolcitudInscripciones(2, $idAsig, true)
        );
        return $ListaSolicitudes;
    }

    function countSolicitudesPendientes()
    {
        include_once "../model/INSCRIPCION.php";
        $objInsc = new INSCRIPCION();
        return $objInsc->queryCountSolcitudesPendientes();
    }

    function getListaPendientes($idInsc, $showArchive)
    {
        include_once "../model/INSCRIPCION.php";
        $objInsc = new INSCRIPCION();
        $objInsc->setIdInscripcion($idInsc);
        return $objInsc->queryFichasInscripcion(false, true, $showArchive);
    }

    function getListaInscYFiles($idUniqueIns)
    {
        include_once "../model/INSCRIPCION.php";
        $I = new INSCRIPCION();
        $I->setIdInscripcion($idUniqueIns);
        return $I->queryFichasInscripcion(true, false, false);
    }

//busca solo una inscripcion, por lo que tambien buscamos los la documentacion
    function getinfoInsc($idInsc)
    {
        include_once "../model/INSCRIPCION.php";
        include_once "controlServicioSocial.php";
        $I = new INSCRIPCION();
        $I->setIdInscripcion($idInsc);
        $FichaValida = getValidaInscripcionDetails($idInsc);
        $DatosFicha = $I->queryFichasInscripcion(false, false, true)[0];
        $Documentos = getListaFilesPendientesInsc($idInsc, 0);
        $I->setIdAlumnoFk($DatosFicha['id_alumno']);
        $cuentaSS = consultaCuentaServSoc($I->getIdAlumnoFk());
        $FichaDetails = array(
            "DATOS" => $DatosFicha,
            "DOCS" => $Documentos,
            "VALIDACION" => count($FichaValida) > 0 ? $FichaValida[0] : null,
            "C_SS" => count($cuentaSS) > 0 ? $cuentaSS[0] : null
        );
        return $FichaDetails;
    }

    function getListaFilesPendientesInsc($idInscipcion, $filtro)
    {
        include_once "../model/INSCRIPCION.php";
        $I = new INSCRIPCION();
        $I->setIdInscripcion($idInscipcion);
        return $I->queryLsDocPendientesInscipcion($filtro);
    }

    function getValidaInscripcionDetails($idInscipcion)
    {
        include_once "../model/INSCRIPCION.php";
        $I = new INSCRIPCION();
        $I->setIdInscripcion($idInscipcion);
        return $I->detallesValidacion();
    }

    function consultaFichaPagoInscripcion($idInsc)
    {
        include_once "../model/INSCRIPCION.php";
        $FICHA = new INSCRIPCION();
        $FICHA->setIdInscripcion($idInsc);
        return $FICHA->queryFichaInscripcionCostos();
    }

//////////////////////////////////
/// FUNCIONES PANEL ALUMNOS ////
//////////////////////////////

    function consultaDocumentacionAlumno($idInsc, $onlyPend)
    {
        include_once "../model/INSCRIPCION.php";
        $INSC = new INSCRIPCION();
        $INSC->setIdInscripcion($idInsc);
        session_start();
        return $INSC->queryLsDocsInscAlumno($_SESSION['id_alumno'], $onlyPend);
    }

    function consultaFichaInscAlumno($idAlumno, $idIdInsc, $tipo)
    {
        include_once "../model/INSCRIPCION.php";
        $FICHA = new INSCRIPCION();
        $FICHA->setIdAlumnoFk($idAlumno);
        $FICHA->setIdInscripcion($idIdInsc);
        return $FICHA->queryFichasInscripcionAlumnos($tipo);
    }

    function enviarSolicitudInscripcion($idAlumno, $idAsig)
    {
        include_once "../model/INSCRIPCION.php";
        include_once "keyGen/generadorClaves.php";
        $FICHA = new INSCRIPCION();
        $FICHA->setIdInscripcion(gen_no_inscripcion());
        $FICHA->setIdAlumnoFk($idAlumno);
        $FICHA->setIdAsignacionFk($idAsig);
        return $FICHA->queryRegistraInscripcion() ? $FICHA->getIdInscripcion() : NULL;
    }

    function confirmaMatchSolicitudAlumno($idAlumno, $idInsc,$filtro)
    {
        include_once "../model/INSCRIPCION.php";
        $FICHA = new INSCRIPCION();
        $FICHA->setIdAlumnoFk($idAlumno);
        $FICHA->setIdInscripcion($idInsc);
        return $FICHA->queryFichasInscripcionAlumnos($filtro);
    }

    function cancelarSolicitudAlumno($idAlumno, $idInsc)
    {
        if (confirmaMatchSolicitudAlumno($idAlumno, $idInsc,0)) {
            #se cancela la inscripcion
            $notas = "Solicitud Cancelada por el alumno el día " . date('Y-m-d H:i:s') . "<br>";
            $confirmacionPago = false;
            $info = "CANCELADO";
            $subtotal = 0;
            //crear la validacion inscripcion
            include_once "../model/INSCRIPCION.php";
            $I = new INSCRIPCION();
            $I->setIdInscripcion($idInsc);
            $I->setNotas($notas);
            return $I->confirmaPagoRealizado(false);
        } else {
            return false;
        }
    }
