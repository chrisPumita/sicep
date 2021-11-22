<?php
if (isset($_POST['filtro'])){
    $idEstado = $_POST['filtro'];
    include_once "../control/controlGeneral.php";
    echo json_encode(getListaMunicipios($idEstado));
}
else
    die;
