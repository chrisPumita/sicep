<?php
if (isset($_POST['filtro'])&& isset($_POST['tipo'])){
    include_once "../control/controlGeneral.php";
    $filtro = $_POST['filtro'];
    $tipo = $_POST['tipo'];
    echo json_encode(getListaAulas($filtro, $tipo));
}
else
    die;

