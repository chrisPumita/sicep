<?php
/*
 * PROCEDENCIAS
 * */

function consultaProcedencias(){
    include_once "../model/TIPO_PROCEDENCIA.php";
    $OBJ = new TIPO_PROCEDENCIA();
    return $OBJ->consultaProcedencias();
}