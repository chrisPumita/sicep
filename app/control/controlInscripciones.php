<?php
/*******************************************************************************
 * VALIDACIONES
 *******************************************************************************/

//COntrolar el flujo de inscripciones
//global variable
//alto  3
//medio 2
//bajo  1
//todos 0
//para registrar un pago, necesito un nivel de acceso 3 (alto)
define('NVL_REG_PGO', 3);
define('NVL_REG_CONST',2);

function procesaInscripcionValidacion($password,$idFichaInsc,$val){
    //vamos a procesar la opcion que esta entrando
    include_once "controlPermisos.php";
    session_start();
    $idAdmin = $_SESSION['idProfesor'];
    if (verificaAdministrador($idAdmin,$password,NVL_REG_PGO))
    {
        switch ($val){
            case '0':
                #se cancela la inscripcion
                $notas = "Solicitud Cancelada el día ".date('Y-m-d H:i:s')."<br>";
                $confirmacionPago= false;
                $info = "CANCELADO";
                $subtotal = 0;
                break;
            case "1":
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
            case "2":
                $info = "ACREDITADO";
                $confirmacionPago= true;
                $notas = "Pago 100% descuento acreditado el día ".date('Y-m-d H:i:s')."<br>";
                $subtotal = 0;
                #se completa curso con beca 100%
                break;
            default:
                return false; #error no encontrado
        }

        //crear la validacion inscripcion
        include_once "../model/INSCRIPCION.php";
        $I = new INSCRIPCION();
        $I->setIdInscripcion($idFichaInsc);
        $I->setNotas($notas);
        if($I->confirmaPagoRealizado($confirmacionPago)&&$confirmacionPago){
            return $I->creaValidacionInscripcion($idAdmin,$subtotal,$info);
        }
        return true;
    }
    else{
        return false;
    }
}

/*******************************************************************************
 * INICIAN Getters and Setters
 *******************************************************************************/

function getListaAlumnosAsignacion($idAsig){
    include_once "../model/INSCRIPCION.php";
    $objInsc = new INSCRIPCION();
    $ListaSolicitudes = array(
        "SolicPend" =>   $objInsc-> consultaSolcitudInscripciones(1,$idAsig,false),
        "OficList" =>  $objInsc-> consultaSolcitudInscripciones(2,$idAsig,true)
    );
    return $ListaSolicitudes;
}

function countSolicitudesPendientes(){
    include_once "../model/INSCRIPCION.php";
    $objInsc = new INSCRIPCION();
    return $objInsc->queryCountSolcitudesPendientes();
}

function getListaPendientes($idInsc){
    include_once "../model/INSCRIPCION.php";
    $objInsc = new INSCRIPCION();
    $objInsc->setIdInscripcion($idInsc);
    return  $objInsc-> queryFichasInscripcion(false,true);
}

function getListaInscYFiles($idUniqueIns)
{
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idUniqueIns);
    return $I->queryFichasInscripcion(true, false);
}

//busca solo una inscripcion, por lo que tambien buscamos los la documentacion
function getinfoInsc($idInsc){
    include_once "../model/INSCRIPCION.php";
    include_once "controlServicioSocial.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInsc);
    $FichaValida = getValidaInscripcionDetails($idInsc);
    $DatosFicha = $I->queryFichasInscripcion(false,false)[0];
    $Documentos = getListaFilesPendientesInsc($idInsc,0);
    $I->setIdAlumnoFk($DatosFicha['id_alumno']);
    $cuentaSS = consultaCuentaServSoc($I->getIdAlumnoFk());
    $FichaDetails = array(
        "DATOS"=>$DatosFicha,
        "DOCS"=>$Documentos,
        "VALIDACION"=>count($FichaValida)>0 ? $FichaValida[0]:null,
        "C_SS"=>count($cuentaSS)>0 ? $cuentaSS[0]:null
    );
    return $FichaDetails;
}

function getListaFilesPendientesInsc($idInscipcion,$filtro){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInscipcion);
    return $I->queryLsDocPendientesInscipcion($filtro);
}

function getValidaInscripcionDetails($idInscipcion){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    $I->setIdInscripcion($idInscipcion);
    return $I->detallesValidacion();
}

function getEstadisticaAnualInscripciones(){
    include_once "../model/INSCRIPCION.php";
    $I = new INSCRIPCION();
    return $I->queryEstadisticasAnioSolicitudes();
}

function consultaFichaPagoInscripcion($idInsc){
    include_once "../model/INSCRIPCION.php";
    $FICHA = new INSCRIPCION();
    $FICHA ->setIdInscripcion($idInsc);
    return $FICHA ->queryFichaInscripcionCostos();
}