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


function validacionAdminAccount($password,$requereNivel){
    //vamos a procesar la opcion que esta entrando
    session_start();
    $idAdmin = $_SESSION['idProfesor'];
    return verificaAdministrador($idAdmin,$password,$requereNivel);
}

//nos va a verificar que exist el prof con clave en cuenta admin
function verificaAdministrador($idProf, $clave, $nivel_permiso){
    include_once "../model/ADMIN.php";
    $admin_tmp = new ADMIN();
    $admin_tmp->setIdProfesor($idProf);
    $result = $admin_tmp->queryBuscaCuentaAdmin();
    //si result esta definida, es decir trae datos, entonces es true es decir != NULL
    return (isset($result) && count($result)>0) ?
        (md5($clave)==$result[0]["clave_confirmacion"] && $nivel_permiso == $result[0]["permisos"]): false;
}
/*******************************************************************************
 * VALIDACIONES
 *******************************************************************************/


/*******************************************************************************
 * FUNCIONES DE CONTROL DE ADMINISTRACION
 *******************************************************************************/


//Regresa lista de administradores
function consultaAdministradores(){
    //incluir el modelo de ADMIN
    include_once "../model/ADMIN.php";
    $objAdmin = new ADMIN();
    return $objAdmin -> queryListaAdministradores();
}

function cambiaEstatusAdmin($idAdmin,$statusActual){
    include_once "../model/ADMIN.php";
    // return ADMIN::updateStatusAdmin($idAdmin,$statusActual);
    $objAdmin = new ADMIN();
    return $objAdmin->updateStatusAdmin($idAdmin,$statusActual=="1"?"0":"1");
}

function consultaAdministrador($id_admin){
    //incluir el modelo de ADMIN
    include_once "../model/ADMIN.php";
    $objAdmin = new ADMIN();
    $result = $objAdmin -> buscaCuentaAdmin($id_admin);
    $json_data = json_encode($result);
    return $json_data;
}

function actualizaDatosAdmin($idAdmin,$cargo,$permisosA){
    include_once "../model/ADMIN.php";
    $objAdmin = new ADMIN();
    return $objAdmin->actualiza_cuenta($idAdmin,$cargo,$permisosA);
}

function addNewAdmin($id,$cargo,$nivel,$pw){
    if (validacionAdminAccount($pw,3)){
        include_once "../model/ADMIN.php";
        $ADMIN = new ADMIN();
        $ADMIN->setIdProfesor($id);
        $ADMIN->setCargo($cargo);
        $ADMIN->setPermisos($nivel);
        include_once "../model/CLAVES.php";
        $CVE = new CLAVES();
        $correo = $_SESSION['correo_user'];
        $claveAcceso = $CVE->generaClaveUsuario(10);
        //Enviar Clave de acceso por correo
        $ADMIN->setClaveConfirmacion(MD5($claveAcceso));
        return $ADMIN->queryAddNewAccount();
    }
    else{
        return false;
    }

}

