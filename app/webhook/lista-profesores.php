<?php
if (isset($_POST['filtro'])){
    $filtro = $_POST['filtro'];
    include_once "../control/controlProfesor.php";
    echo json_encode(consultaProfesores($filtro,0));
}
else
    die;
