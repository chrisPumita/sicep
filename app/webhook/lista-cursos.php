<?php
//Ontener todos los cursos segun el frultro. enviado a funcion asincrona
if (isset($_POST['filtro'])&& isset($_POST['valueID'])){
    include_once "../control/controlCursos.php";
    $typeFiltro = $_POST['filtro'];
    $value = $_POST['valueID'];
    echo json_encode(consultaCursos($typeFiltro,$value));
}
