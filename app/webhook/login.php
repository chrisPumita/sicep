<?php
sleep(1);
if (isset($_POST['txtEmail']) && isset($_POST['txtPw']))
{
    $pw = $_POST['txtPw'];
    $user = $_POST['txtEmail'];
    $isProfesor = isset($_POST['chkProf']) ? $_POST['chkProf']:null;

    include_once "../control/controlAccesso.php";
    $dataFound = verificaCuentaUser($user,$pw,$isProfesor);
    if(count($dataFound)>0){
        $mje = array(
            "mjeType" => "1",
            "Mensaje" => "Cuenta verificada",
            "tipoCuenta" => isset($isProfesor)? "PROFESOR" : "ALUMNO",
            "data" => $dataFound
        );
    }
    else{
        $mje = array(
            "mjeType" => "0",
            "Mensaje" => "No existe la cuenta o fue suspendida. Puede que el correo o la contraseña sean incorrectas",
            "tipoCuenta" => isset($isProfesor)? "PROFESOR" : "ALUMNO"
        );
    }
}
else
{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error interno de PHP",
    );
}

echo json_encode($mje);