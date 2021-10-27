<?php
/*Funcion para consultar todos los cursos LFHL*/
function consultaCursos($estado_filtro, $id_curso){
    include_once "../model/CURSO.php";
    $CURSO = new CURSO();
    $result = $CURSO->queryconsultaCursos($estado_filtro, $id_curso);
    return json_encode($result);
}
//LFHL
