<?php
$datoX = $_POST['datoX'];
if (isset($datoX))
{
    $dato1 = $_POST['dato1'];
    include_once "../model/mainModel.php";
//Creacion de objero en una linea
    $dato1 = mainModel::limpiar_cadena($dato1);
    $dato1 = mainModel::limpiar_cadena($_POST['dato2']);

}
else{
    $mje= "sin datos";
}

//llamar al control y a la funcion
