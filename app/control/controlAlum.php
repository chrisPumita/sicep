<?php
function crearCuentaAlumno($params){
    include_once "../model/CLAVES.php";
    //verificar si existe una cuenta
    include_once "../model/ALUMNO.php";
    $al = new ALUMNO();
    $clave = date("YmdHis");
    $al->setIdPersona($clave);
    $al->setNombre($params['nombre']);
    $al->setApp($params['app']);
    $al->setApm($params['apm']);
    $al->setTelefono($params['telefono']);
    $al->setSexo($params['sexo']);
    //default el estado es 1
    $al->setEstatus("1");
    ///Crear alumno
    $al->setIdMunicipio($params['id_municipio']);
    $al->setIdUniversidad($params['id_universidad']);
    $al->setMatricula($params['matricula']);
    $al->setNombreUni($params['nombre_uni']);
    $al->setIdProcedencia($params['idProcedencia']);
    $al->setCarreraEspecialidad($params['carrera_especialidad']);
    $al->setEmail($params['email']);
    $al->setPw(md5($params['pw']));
    // valor por default de la cuenta de alumno = 0
    // porque no se ha validado cuenta de alumno
    $al->setEstatusAlumno("0");

    $result = $al->queryInsertPersona();
    if ($result){
        $res= $al->queryInsertAlumno();
        return $res;
    }
    else{
        return false;
    }
}

function consultaListaAlumnos($filtro,$idUnique){
    include_once "../model/ALUMNO.php";
    $objAlumn = new ALUMNO();
    return $objAlumn->queryConsultaListaAlumnos($filtro,$idUnique);
}

function countRevisionCuentas(){
    include_once "../model/ALUMNO.php";
    $objAlumn = new ALUMNO();
    return $objAlumn->queryCountCuentasPorVerificar();
}


function updateEstatusAlumno($id,$status){
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    return $objAlum->updateEstatusAlumno($id,$status=="1"?"0":"1");
}

function updateAlumno($params)
{
    //Obtenemos el id de la session 
    session_start();
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    //Control para la persona
    $ALUMNO->setIdPersona($_SESSION['id_persona']);
    $ALUMNO->setNombre($params['nombre']);
    $ALUMNO->setApp($params['app']);
    $ALUMNO->setApm($params['apm']);
    $ALUMNO->setTelefono($params['telefono']);
    $ALUMNO->setSexo($params['sexo']);
    $PERSONA = $ALUMNO->queryUpdatePersona();
    if($PERSONA){
        //Control para el alumno 
        $ALUMNO->setIdAlumno($_SESSION['id_alumno']);
        $ALUMNO->setIdMunicipio($params['idMunicipio']);
        $ALUMNO->setIdProcedencia($params['idProcedencia']);
        $ALUMNO->setCarreraEspecialidad($params['carreraEsp']);
        $ALUMNO->setEmail($params['email']);
        $alumno = $ALUMNO->queryUpdateAlumno();
        if($alumno ){
            //Actualizamos valores en el $_SESSION
            $_SESSION['usuario'] = $ALUMNO->getNombre();
            $_SESSION['apaterno'] = $ALUMNO->getApp();
            $_SESSION['amaterno'] = $ALUMNO->getApm();
            $_SESSION['correo_user'] = $ALUMNO->getEmail();
            //Preguntar a Chris como hacerle aqui hahaha xD
            //$_SESSION['tipo_procedencia'] = $ALUMNO->get();
            $_SESSION['id_tipo_procedencia'] = $ALUMNO->getIdProcedencia();
            $_SESSION['nombre_completo'] = $ALUMNO->getNombre()." ".$ALUMNO->getApp()." ".$ALUMNO->getApm();
            return true;
        }
    }
    return false;
    
}

function consultaAlumno($id_alumno){
    include_once "../model/ALUMNO.php";
    $al = new ALUMNO();
    $result = $al ->consultaAlumno($id_alumno);
    $json_data = json_encode($result);
    return $json_data;
}

function updatePwdAlumn($idAlumno,$email,$pwdAnterior,$pwdNueva)
{
    $tmpAlumno= consultaCuentaAlumno($email,md5($pwdAnterior));
    if(count($tmpAlumno)>0){
        include_once "../model/ALUMNO.php";
        $ALUMNO = new ALUMNO();
        $ALUMNO->setIdAlumno($idAlumno);
        $ALUMNO->setPw(md5($pwdNueva));
        return $ALUMNO->queryUpdatePw();
    } else {
        return false;
    }
}

function eliminarAlumno($id_alumno)
{
    include_once "../model/ALUMNO.php";
    $obj_alumn = new ALUMNO();
    echo $obj_alumn->eliminaAlumno($id_alumno) ? "Se elimino profesor" : "No se pudo eliminar al alumno";
}

/***********  A C T U A L I Z A R  F O T O  P E R F I L     LFHL*************/
function updateFotoAlumno($idAlumno,$path){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setIdAlumno($idAlumno);
    $ALUMNO->setPerfilImage($path);
    return $ALUMNO->queryUpdateFotoAlumno();
}
/**********************VERIFICADOR DE CUENTA ChrisRCSG**********************************/
function consultaCuentaAlumno($correo,$pw){
    include_once "../model/ALUMNO.php";
    $ALUM = new ALUMNO();
    $ALUM->setEmail($correo);
    $ALUM->setPw($pw);
    return $ALUM->queryAcountAlumno();
}
/**********************VERIFICADOR DE CUENTA**********************************/


/****************************************************
 *
 *          P E N D I E N T E
 *
 *  CREAR CUENTA SERVICIO SOCIAL
 *
 * **************************************************/
function crearCuentaServSoc($id_alumno,$clave_acceso,
                            $fecha_inicio_serv,$fecha_termino_serv,
                            $notas,$permisos)
{
    include_once "../model/SERVICIO_SOCIAL.php";
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    $servSoc = new SERVICIO_SOCIAL();
    $servSoc->setIdAlumno($id_alumno);
    $servSoc->setClaveAcceso(md5($clave_acceso));
    $servSoc->setFechaInicioServ($fecha_inicio_serv);
    $servSoc->setFechaTerminoServ($fecha_termino_serv);
    $servSoc->setNotas($notas);
    $servSoc->setPermisos($permisos);
    $servSoc->setEstatus("1");
    $objAlum = $servSoc;
    //$res = $objAlum->
}
/****************************************************
 *
 *          P E N D I E N T E
 *
 *  CREAR CUENTA SERVICIO SOCIAL
 *
 * **************************************************/