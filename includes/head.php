<?php
session_start();
$inactividad = 900;
// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactividad){
        session_destroy();
        header("Location: ./app/log-out.php");
    }
}
// El siguiente key se crea cuando se inicia sesión
$_SESSION["timeout"] = time();
if(isset($_SESSION['usuario']))
{
    //Si ya existe una sesion reedirecciona a home
    header('Location: ./app/home');
}
?>
<!-- ----- VERSION DEL DOCUMENTO ---------
    VERSION 2.12.1 BUILD 31-12-21
    @autor: ReCkrea StuDios
    @website: reckreastudios.com
    @webdevs: Chris RCGS, Fernando HL, Jennifer Morales.
    -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SICEP - <?php echo $titulo ?></title>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/app.css">
<link rel="stylesheet" href="assets/css/pages/auth.css">
<link rel="stylesheet" href="assets/css/styles.css">

<link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
<link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">