<?php

//Regresa lista de administradores
function consultaAdministradores(){
    //incluir el modelo de ADMIN
    include_once "../model/ADMIN.php";
    $objAdmin = new ADMIN();
    return $objAdmin -> queryListaAdministradores();
}