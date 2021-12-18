<?php
if (isset($_POST['id'])){
    $id = $_POST['id'];
    include_once "../control/controlCursos.php";
    $data = getDescuentos($id);
    echo json_encode($data);
}
else{
    $mje = array(
        "mjeType" => -1,
        "Mensaje" => "Internal Error"
    );
    echo json_encode($mje);
}
