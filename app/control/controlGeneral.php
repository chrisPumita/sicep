<?php
function getListaDepartamentos(){
    include_once "../model/DEPTO.php";
    $DEPTO = new DEPTO();
    return $DEPTO::listaDepartamentos();
}