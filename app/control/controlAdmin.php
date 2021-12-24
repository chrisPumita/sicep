<?php

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

//nos va a verificar que exist el prof con clave en cuenta admin
function verificaAdministrador($idProf, $clave, $nivel_permiso){
    require_once "../model/ADMIN.php";
    $admin_tmp = new ADMIN();
    $result = $admin_tmp-> buscaCuentaAdmin($idProf);
    //si result esta definia, es decir trae datos, entonces es true es decir != NULL
    if (isset($result) && count($result)>0 && count($result)<2){
        // verificar que la pw y los niveles de permiso sean los correctos
        return (md5($clave)==$result[0]["clave_confirmacion"] && $nivel_permiso == $result[0]["permisos"]);
    }
    else{
        return false;
    }
}