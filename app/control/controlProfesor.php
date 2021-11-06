<?php

//Funcion de Lista Profesores LFHL
function consultaProfesores($filtro){
    include_once "../model/PROFESOR.php";
    $PROFESORES = new PROFESOR();
    $result = $PROFESORES->  ListaProfesoresA($filtro);
    return $result;
}