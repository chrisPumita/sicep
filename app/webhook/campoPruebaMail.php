<?php
include_once "../control/controlMails.php";

if(enviarCorreoPrueba()){
    echo "COREO ENVIADO";
}
else{
    echo "ERORR: <br>";
}